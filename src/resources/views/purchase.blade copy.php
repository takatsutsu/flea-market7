{{-- resources/views/products/purchase.blade.php --}}

@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/bootstrap_custom2.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/purchase.css') }}">
@endsection

@section('content')
<div class="purchase-container">
    <h1>購入手続き</h1>

    <div class="product-summary">
        <h2>購入商品</h2>
        <div class="product-info-box">
            <img src="{{ Storage::url($product->product_picture) }}" alt="{{ $product->product_name }}" class="product-image">
            <div class="product-details-summary">
                <p class="product-name-summary">{{ $product->product_name }}</p>
                <p class="product-price-summary">¥{{ number_format($product->product_price) }} (税込)</p>
            </div>
        </div>
    </div>

    <form action="{{ route('products.purchase.process', ['product' => $product->id]) }}" method="POST">
        @csrf

        <div class="delivery-address-section">
            <h2>配送先</h2>
            <div class="address-box">
                @if(Auth::check())
                <p>〒{{ $user->postal_code ?? '情報なし' }}</p>
                <p>{{ $user->address ?? '情報なし' }}</p>
                <p>{{ $user->building_name ?? '情報なし' }}</p>
                <button type="button" class="btn btn-secondary change-address-btn">変更する</button>
                @else
                <p>配送先情報を表示するにはログインしてください。</p>
                @endif
            </div>
        </div>

        <div class="payment-method-section">
            <h2>支払い方法</h2>
            <div class="payment-method-box">
                <select name="payment_method_id" required class="payment-select">
                    <option value="">支払い方法を選択してください</option>
                    @forelse($paymentMethods as $paymentMethod)
                    <option value="{{ $paymentMethod->id }}">{{ $paymentMethod->payment_name }}</option>
                    @empty
                    <option value="" disabled>支払い方法が登録されていません</option>
                    @endforelse
                </select>
                <button type="button" class="btn btn-secondary change-payment-btn">変更する</button>
            </div>
        </div>

        <div class="order-summary">
            <h2>注文内容</h2>
            <p>商品代金: ¥{{ number_format($product->product_price) }}</p>
            <p>支払い金額: ¥{{ number_format($product->product_price) }}</p> {{-- 送料などを考慮する場合は変更 --}}
            <button type="submit" class="btn btn-danger confirm-purchase-btn">購入を確定する</button>
        </div>
    </form>
</div>
@endsection