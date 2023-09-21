@extends('template.carttemplate')
@section('main')
    <div class="bbody-chi ">
        <div class="body-chi">
            <div class="body-t-chi">
                <h2 class="marginTop">新增產品</h2>
                <div class="f1 ff">Dashboard &nbsp </div>
                <div class="ff">/ &nbsp Order List</div>

                <!-- search & dropdown -->
                <div
                    class="sd border border-bottom-0 shadow-sm rounded-top-4 d-flex justify-content-between flex-xs-column flex-sm-column flex-md-column flex-lg-row flex-xl-row">
                    <form action="{{ route('product.store') }}" class=" p-2 container" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <ul class="">
                            <li>
                                <label for="">產品名稱*</label>
                                <input name="name" class="w-50 m-3" type="text" required>
                            </li>
                            <hr>
                            <li>
                                <label for="">產品圖片*</label>
                                <input name="image" class="w-50 m-3" type="file" required>
                            </li>
                            <hr>
                            <li>
                                <label for="productPrice">產品價格*</label>
                                <input name="price" id="productPrice" class="w-50 m-3" type="number" min="0"
                                    required>
                            </li>
                            <hr>
                            <li>
                                <label for="" class="me-3">顯示狀態</label>
                                <label for="">
                                    <input name="status" class="" type="radio" value="1" checked> 要顯示
                                    <input name="status" class=" " type="radio" value="2">不顯示
                                </label>
                                <hr>

                            </li>
                            <li>
                                <label for="">產品描述</label>
                                <hr>
                                <textarea class="ms-4 mb-4 w-100 h-100" name="desc" style="resize: none; min-height:150px; "></textarea>
                            </li>
                        </ul>
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('product.index') }}"
                                class=" text-decoration-none rounded pp border-0  text-nowrap m-4 p-2">取消按鈕</a>
                            <button type="submit" class="rounded pp border-0 d-flex text-nowrap m-4 p-2">新增按鈕</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')

@endsection


</html>
