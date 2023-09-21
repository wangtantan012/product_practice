@extends('template.fronttemplate')
@section('styles')
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/dev/complete.css') }}">
@endsection
@section('main')
<div class="img-container">
    <span>謝謝購買!!!!!</span>
    <img src="/img/thankyou.png" alt="">
</div>
<div class="btn-container">
    <a href=" {{ route('front.index') }} ">
        <div class="front-pge btn">回首頁</div>
    </a>
    <div class="order-list btn">查看訂單</div>
</div>
@endsection

@section('js')

@endsection
