@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/bootstrap_custom2.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/show.css') }}">
@endsection

@section('content')
<div class="product-detail-container">
    <div class="product-header">
        <div class="product-image-section">
            <img src="{{ Storage::url($product->product_picture) }}" alt="{{ $product->product_name }}">
        </div>
        <div class="product-info-section">
            <h1 class="product-name">{{ $product->product_name }}</h1>
            <p class="brand-name">ブランド名: {{ $product->brand_name }}</p>
            <p class="product-price">¥{{ number_format($product->product_price) }} (税込)</p>

            <div class="product-actions">
                <div class="likes-reviews">
                    <span>
                        <i class="far fa-star"></i> 1
                    </span>
                    <span>
                        <i class="far fa-comment"></i> {{ $product->comments->count() }}
                    </span>
                </div>
                <a href="{{ route('products.purchase.form', ['product' => $product->id]) }}" class="btn btn-primary buy-button">
                    購入手続きへ
                </a>

            </div>

            <div class="product-description-section">
                <h2>商品説明</h2>
                <dl>
                    <dt>カラー</dt>
                    <dd>グレー</dd>
                    <dt>商品</dt>
                    <dd>新品</dd>
                </dl>
                <p>{{ $product->product_explanation }}</p>
                <p>購入後、即発送いたします。</p>
            </div>
        </div>
    </div>

    <div class="product-details-bottom">
        <h2>商品の情報</h2>
        <table class="product-info-table">
            <tr>
                <th>カテゴリ</th>
                <td>
                    {{-- ここをループで表示するように変更 --}}
                    @forelse($product->categories as $category)
                    <span class="tag">{{ $category->category_name }}</span>
                    @empty
                    <span class="tag">N/A</span>
                    @endforelse
                    {{-- 「メンズ」がサブカテゴリや別のタグの場合は調整。今はハードコードのままにしておきます --}}
                    <span class="tag">メンズ</span>
                </td>
            </tr>
            <tr>
                <th>商品の状態</th>
                <td>
                    @if($product->condition)
                    {{ $product->condition->condition }}
                    @else
                    N/A
                    @endif
                </td>
            </tr>
        </table>
    </div>

    <div class="comments-section">
        <h2>コメント({{ $product->comments->count() }})</h2>
        @foreach($product->comments as $comment)
        <div class="comment-item">
            <p class="comment-author">{{ $comment->user->name ?? 'Unknown User' }}</p>
            <div class="comment-text-box">
                <p>{{ $comment->comment }}</p>
            </div>
        </div>
        @endforeach

        <div class="add-comment-section">
            <h2>商品へのコメント</h2>
            <form action="{{ route('products.comments.store', ['product' => $product->id]) }}" method="POST">
                @csrf
                <textarea name="comment" rows="5" placeholder="コメントを入力してください。"></textarea>
                <button type="submit" class="btn btn-danger submit-comment-button">コメントを送信する</button>
            </form>
        </div>
    </div>
</div>
@endsection