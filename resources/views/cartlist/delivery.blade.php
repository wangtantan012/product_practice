@extends('template.fronttemplate')
@section('styles')
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/dev/delivery.css') }}">
@endsection
@section('main')
<div class="delivery-container">
    <div class="locate-icon">
        <img src="" alt="">
    </div>
    <span>配送資訊</span>
</div>
<form action=" " >
    <div class="input-container">
    <form action="">
        <input type="text" placeholder="收件者姓名">
        <input type="text" placeholder="收件者姓名">
        <input type="date">
        <input type="text" placeholder="收貨者連絡電話">
        <input type="text" placeholder="備註">
    </form>
</div>
</form>

<div class="page-btn-container">
    <a href=" {{ route('freshcart.index') }} ">
        <div class="prev-btn btn">上一步</div>
    </a>
    <a href=" {{ route('freshcart.payment') }} ">
        <div class="next-btn btn">下一步</div>
    </a>
</div>


@endsection

@section('js')

@endsection
