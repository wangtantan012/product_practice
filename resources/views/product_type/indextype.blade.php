@extends('template.carttemplate')
@section('main')
    <div class="bbody-chi ">
        <div class="body-chi">
            <div class="body-t-chi">
                <h2 class="marginTop">Type list</h2>
                <div class="f1 ff">Dashboard &nbsp </div>
                <div class="ff">/ &nbsp Order List</div>
                <!-- search & dropdown -->
                <div class="sd border border-bottom-0 shadow-sm rounded-top-4 justify-content-between w-100">
                    <label class="input-group inputsalign-self-center px-1">
                        <input type="text" class="form-control" placeholder="Search" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </label>
                    <a href="{{ route('type.create') }}" class=" text-decoration-none">
                        <button class="rounded pp border-0 d-flex text-nowrap p-2">新增類別</button>
                    </a>
                </div>
            </div>


            <div class=" border border-top-0 shadow-sm overflow-x-scroll">
                <table class="myFormat" style="width:100%">
                    <thead>
                        <tr class="text-center th-chi">
                            <th>
                                <input class="form-check-input col-1 " type="checkbox" onchange="checkAll(this)"
                                    value="" id="flexCheckDefault" checked>
                            </th>
                            <th style="width:15%">Image</th>
                            <th style="width:15%">類別名稱</th>
                            <th style="width:35%">類別描述</th>
                            <th style="width:15%">新增日期</th>
                            <!-- <th class=" col-1">Payment</th> -->
                            <th style="width:10%">功能</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($types as $type)
                            <tr class="text-center" id="deleteData{{ $type->id }}">
                                <th>
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                        checked>
                                </th>
                                <td>
                                    @foreach ($type->ProductTypeImg ?? [] as $img)
                                        <label class="form-check-label" for="flexCheckChecked">
                                            <img class="p1" src="{{ asset($img->img_path) }}" alt="">
                                        </label>
                                    @endforeach
                                </td>
                                <td>{{ $type->name }}</td>
                                <td>{{ $type->desc }}</td>
                                <td>{{ $type->created_at->format('Y-m-d') }}</td>
                                <td>
                                    <a class="dropdown-item" href="{{ route('type.edit', ['type' => $type->id]) }}">
                                        <i class="bi bi-pencil-square"></i> 編輯
                                    </a>
                                    {{--  刪除 --}}
                                    {{-- 寫法一 Form表單 --}}
                                    {{-- <form action="{{ route('type.destroy', ['type' => $type->id]) }}" method="POST" data-name="{{ $type->name }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item" href="#">
                                                <i class="bi bi-trash"></i>刪除
                                            </button>
                                        </form> --}}

                                    {{-- 寫法二 for JS  $type is foreach  $types in ProductType --}}
                                    <button type="button" class="dropdown-item" onclick="deleteData({{ $type->id }})">
                                        <i class="bi bi-trash"></i>刪除
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div
                class="body-b-chi border-top-0  rounded-bottom-4  d-flex  justify-content-md-between flex-column flex-sm-column flex-md-row">
                <span class="pps d-inline-block mt-md-3">Showing 1 to 8 of 12 entries</span>
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
                </nav>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        //  寫法一 JS delete with alert
        // const forms = document.querySelectorAll('td form');
        // forms.forEach(element => {
        //     element.addEventListener('submit', (event) => {
        //         event.preventDefault();
        //         Swal.fire({
        //             title: `確認要刪除${element.dataset.name}嗎?`,
        //             showDenyButton: true,
        //             confirmButtonText: '取消',
        //             denyButtonText: `刪除`,
        //         }).then((result) => {
        //             /* Read more about isConfirmed, isDenied below */
        //             if (result.isDenied) {
        //                 element.submit();
        //             }
        //         })
        //     })
        // });

        // 寫法二 JS  function + fetch + formData +alert 用JS刪除畫面view 上的東西順便alert
        function deleteData(id, name) { //  id is var deleteData() is JS function
            const formData = new FormData();
            formData.append('_token',
            '{{ csrf_token() }}'); //formData with append means put items('name', 'value')  into the formData
            formData.append('_method', 'delete');
            Swal.fire({
                title: `確認要刪除${name}嗎?`,
                showDenyButton: true,
                denyButtonText: `刪除`,
                confirmButtonText: '取消',
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isDenied) {
                    fetch(`/type/${id}`, { // give the formData(with method+body(self-define)) out for every path(/type/${id})
                        method: 'POST',
                        body: formData,
                    }).then((res) => {
                        return res.text() // give out with text file
                    }).then((data) => {
                        if (data == 'success') {
                            const tr = document.querySelector(`#deleteData${id}`)
                            tr.remove();
                        } else {   //data == 'fail' means can't find $id in ProductType
                            Swal.fire({
                                icon: 'error',
                                title: `刪除${name}失敗`,
                                text: '查無資料',
                            })
                        }
                    })
                }
            })

        }
    </script>
@endsection
