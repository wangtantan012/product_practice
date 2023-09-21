@extends('template.fronttemplate')
@section('styles')
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/dev/payment.css') }}">
@endsection


@section('main')
<div class="payment-container">
    <div class="payment-icon">
        <img src="" alt="">
    </div>
    <span>付款資訊</span>
</div>
<div class="input-container">
    <input type="radio" name="test1">
    <div class="span-container">
        <div>臨櫃匯款</div>
        <span>0000-123456789-123456</span>
        <span>007第一銀行</span>
        <span>戶名:XXX</span>
        <span>匯款後請聯繫洪先生(0934343243)</span>
        <span>請告知帳號末五碼以便轉帳</span>
    </div>
</div>
<div class="decorate"></div>
<div class="input-container">
    <input type="radio" name="test1">
    <div class="span-container">
        <div>線上付款</div>
        <span>本站線上付款為綠界金流</span>
    </div>
</div>

<div class="page-btn-container">
    <a href=" {{ route('freshcart.address') }} ">
        <div class="prev-btn btn">上一步</div>
    </a>
    <a href=" {{ route('freshcart.thank') }} ">
        <div class="next-btn btn">下一步</div>
    </a>
</div>
@endsection


@section('js')
@endsection
