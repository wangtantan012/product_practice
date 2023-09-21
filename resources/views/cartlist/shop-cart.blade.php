@extends('template.fronttemplate')
@section('styles')
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/dev/shopcart.css') }}">
@endsection
@section('main')
<div class="product-list-container">
    <div class="title">Order Details</div>
     {{-- 左 --}}
    <div class="product-area">
        <div class="product-specification">
            <div class="product-pic">
                <img src="" alt="">
            </div>
            <div class="product-content">
                <div class="product-name">Cadbury 5 Star Chocolate</div>
                <div class="product-weight">200g</div>
            </div>
        </div>

        {{-- 右 --}}
        <div class="product-detail">
            <div class="count-area">
                <div class="minus-icon">
                    <img src="" alt="">
                </div>
                <div class="count">5</div>
                <div class="increase-icon">
                    <img src="" alt="">
                </div>
            </div>
            <div class="price">$20.00</div>
        </div>
    </div>
    <div class="total-area">
        <span>Subtotal</span>
        <div class="price">$20.00</div>
    </div>
</div>
<div class="page-btn-container d-flex justify-content-end">
    <a href=" {{ route('freshcart.address') }} "><div class="next-btn btn">下一步</div></a>
</div>
@endsection

@section('js')

@endsection
