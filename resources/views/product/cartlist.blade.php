@extends('template.carttemplate')
@section('main')
    <div class="bbody-chi ">
        <div class="body-chi">
            <div class="body-t-chi">
                <h2 class="marginTop">Product list</h2>
                <div class="f1 ff">Dashboard &nbsp </div>
                <div class="ff">/ &nbsp Order List</div>


                <!-- search & dropdown -->

                <div
                    class="sd border border-bottom-0 shadow-sm rounded-top-4 d-flex justify-content-between flex-xs-column flex-sm-column flex-md-column flex-lg-row flex-xl-row">
                    <div class=" p-2 container">
                        <form action="{{ route('product.index') }}" method="get" class="input-group inputsalign-self-center"
                            role="search">
                            <input type="text" name="keyword" value="{{ $keyword }}" class="form-control"
                                placeholder="搜尋名稱或描述" aria-label="Search">
                            <button type="submit" class="btn btn-success">搜尋</button>
                        </form>
                    </div>
                    </nav>
                    <a href="{{ route('product.create') }}" class=" text-decoration-none">
                        <button class="rounded pp border-0 d-flex text-nowrap m-4 p-2">新增產品按鈕</button>
                    </a>

                </div>
            </div>
            <div class="box-m-chi border border-top-0 shadow-sm overflow-x-scroll">
                <table class="myFormat">
                    <thead>
                        <tr>
                            <th class="th-chi"><input class="form-check-input col-1 " type="checkbox"
                                    onchange="checkAll(this)" value="" id="flexCheckDefault">
                            </th>
                            <th class="th-chi"><label class="form-check-label col-1 row"
                                    for="flexCheckDefault">Image</label></th>
                            <th class="th-chi col-2">產品名</th>
                            <th class="th-chi col-2">產品描述</th>
                            <th class="th-chi col-3">新增日期</th>
                            <!-- <th class="th-chi col-1">Payment</th> -->
                            <th class="th-chi col-1">顯示</th>
                            <th class="th-chi col-1">產品價格</th>
                            <th class="th-chi col-1">功能</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckChecked" checked></th>
                                <td><label class="form-check-label" for="flexCheckChecked"><img class="p1"
                                            src="{{ asset($product->img_path) }}" alt="">
                                    </label></td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->desc }}</td>
                                <td>{{ $product->created_at->format('Y-m-d') }}</td>
                                <!-- <td>Paypal</td> -->

                                <td>
                                    @if ($product->status === 1)
                                        <span class="brick" id="green-b">顯示</span>
                                    @else
                                        <span class="brick" id="red-b">不顯示</span>
                                    @endif
                                </td>
                                <td>${{ $product->price }}</td>
                                <td>
                                    <a class="dropdown-item" href="{{ route('product.edit', ['id' => $product->id]) }}">
                                        <i class="bi bi-pencil-square"></i> 編輯
                                    </a>
                                    <form action="{{ route('product.delete', ['id' => $product->id]) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item" href="#">
                                            <i class="bi bi-trash"></i> 刪除
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

            <div class="body-b-chi border-top-0  rounded-bottom-4  d-flex  justify-content-center  ">
                {{ $products->links() }}
                {{-- <span class="pps d-inline-block mt-md-3">Showing 1 to 8 of 12 entries</span>
                <nav aria-label="Page navigation example">
                    <ul class="pagination mb-0 mt-2 mb-sm-0 mt-sm-2 ">
                        <li class="page-item">
                            <a class="page-link rounded pp border-0" href="#">Previous</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link plg rounded " href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link plg rounded" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link plg rounded" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link plg rounded" href="#">Next</a>
                        </li>
                    </ul>
                </nav> --}}
            </div>
        </div>
    </div>
@endsection

@section('JS')
@endsection
