@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/bootstrap_custom2.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="menu">
    <span class="menu-item active">おすすめ</span>
    <a href="{{ url('/products?page=mylist') }}" class="menu-item">マイリスト</a>
</div>

<div class="product-grid">
    @foreach($products as $product)
    <div class="product-card">
        <div class="image-wrapper">
            <img src="{{ Storage::url($product->product_picture) }}" alt="商品画像">
            <p class="product-name">{{ $product->product_name }}</p>
        </div>
    </div>
    @endforeach
</div>

@endsection