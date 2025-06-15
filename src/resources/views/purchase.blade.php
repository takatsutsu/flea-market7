{{-- resources/views/products/purchase.blade.php --}}

@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/purchase.css') }}">
@endsection

@section('content')
<div class="purchase-page">
    <div class="purchase-container">
        <div class="purchase-left-column">
            <div class="product-section">
                <h2 class="section-title">商品名</h2>
                <div class="product-info">
                    {{-- 商品画像の表示 --}}
                    <div class="product-image-wrapper">
                            <img src="{{ Storage::url($product->product_picture) }}" alt="{{ $product->product_name }}">
                    </div>
                    <p class="product-name">{{ $product->product_name }}</p>
                    <p class="product-price">¥{{ number_format($product->product_price) }}</p>
                </div>
            </div>

            <div class="payment-method-section">
                <h2 class="section-title">支払い方法</h2>
                <div class="payment-selection-wrapper">
                    {{-- プルダウンにidを付与 --}}
                    <select name="payment_method_id" id="paymentMethodSelect" required class="payment-select">
                        <option value="">選択してください</option>
                        @forelse($paymentMethods as $paymentMethod)
                        {{-- optionのvalueに支払い方法のID、data-nameに支払い方法名を設定 --}}
                        <option value="{{ $paymentMethod->id }}" data-name="{{ $paymentMethod->payment_name }}">{{ $paymentMethod->payment_name }}</option>
                        @empty
                        <option value="" disabled>支払い方法が登録されていません</option>
                        @endforelse
                    </select>
                </div>
            </div>

            <div class="delivery-address-section">
                <h2 class="section-title">配送先</h2>
                <div class="address-details">
                    @if(Auth::check())
                    <p>〒{{ $user->postal_code ?? 'XXX-YYYY' }}</p>
                    <p>{{ $user->address ?? 'ここに住所と建物が入ります' }}</p>
                    @else
                    <p>配送先情報を表示するにはログインしてください。</p>
                    @endif
                    <a href="#" class="change-address-link">変更する</a>
                </div>
            </div>
        </div>

        <div class="purchase-right-column">
            <div class="order-summary-box">
                <div class="summary-item">
                    <span>商品代金</span>
                    <span>¥{{ number_format($product->product_price) }}</span>
                </div>
                <div class="summary-item">
                    <span>支払い方法</span>
                    {{-- 支払い方法の表示を切り替えるためのspanにidを付与 --}}
                    <span id="selectedPaymentMethod">選択されていません</span>
                </div>
                <form action="{{ route('products.purchase.process', ['product' => $product->id]) }}" method="POST">
                    @csrf
                    {{-- 選択された支払い方法のIDをhiddenフィールドで送信 --}}
                    <input type="hidden" name="selected_payment_method_id" id="hiddenPaymentMethodId">
                    <button type="submit" class="purchase-button">購入する</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const paymentMethodSelect = document.getElementById('paymentMethodSelect');
        const selectedPaymentMethodSpan = document.getElementById('selectedPaymentMethod');
        const hiddenPaymentMethodIdInput = document.getElementById('hiddenPaymentMethodId');

        // ページ読み込み時の初期表示設定
        // プルダウンに何も選択されていない状態を考慮
        if (paymentMethodSelect.value === "") {
            selectedPaymentMethodSpan.textContent = "選択されていません";
            hiddenPaymentMethodIdInput.value = "";
        } else {
            // 既に選択されているoptionがあれば、その内容を反映
            const selectedOption = paymentMethodSelect.options[paymentMethodSelect.selectedIndex];
            selectedPaymentMethodSpan.textContent = selectedOption.dataset.name;
            hiddenPaymentMethodIdInput.value = selectedOption.value;
        }

        // プルダウンの選択が変更されたときの処理
        paymentMethodSelect.addEventListener('change', function() {
            const selectedOption = this.options[this.selectedIndex];
            if (selectedOption.value === "") {
                // "選択してください"が選ばれた場合
                selectedPaymentMethodSpan.textContent = "選択されていません";
                hiddenPaymentMethodIdInput.value = "";
            } else {
                // 支払い方法が選択された場合
                selectedPaymentMethodSpan.textContent = selectedOption.dataset.name;
                hiddenPaymentMethodIdInput.value = selectedOption.value;
            }
        });
    });
</script>
@endsection