@extends('template.carttemplate')
@section('main')
    <div class="bbody-chi ">
        <div class="body-chi">
            <div class="body-t-chi">
                <h2 class="marginTop">新增類別</h2>
                <div class="f1 ff">Dashboard &nbsp </div>
                <div class="ff">/ &nbsp Order List</div>


                <!-- search & dropdown -->
                <div class="sd border border-bottom-0 shadow-sm rounded-top-4 d-flex justify-content-between flex-xs-column flex-sm-column flex-md-column flex-lg-row flex-xl-row">
                    <form action="{{ route('type.store') }}" class=" p-2 container" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <ul>
                            <li>

                                <label for="">類別名稱*</label>
                                <input name="name" class="w-50 m-3" type="text" required>
                            </li>
                            <hr>
                            <li>
                                <label for="">類別圖片*</label>
                                <input
                                    name="image[]"
                                    class="w-50 m-3"
                                    type="file"
                                    accept="image/*"
                                    multiple>
                            </li>
                            <hr>
                            <li>
                                <label for="">類別描述</label>
                                <hr>
                                <textarea class="ms-4 mb-4 w-100 h-100" name="desc" style="resize: none; min-height:150px; "></textarea>
                            </li>
                        </ul>
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('type.index') }}" class=" text-decoration-none rounded pp border-0  text-nowrap m-4 p-2">
                                取消按鈕
                            </a>
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
