@extends('template.fronttemplate')

@section('main')
    <div class="container">
        <h1>留言板</h1>
        <!-- outter frame -->
        <div class="border border-5 rounded-3 w-100 p-3">

            <!-- inner frame  -->
           @foreach ($messages as $key => $value)
               <div class="d-flex justify-content-between border border-2 rounded-5 w-100 p-3 my-3" id="mesgForm{{ $value->id }} ">
                   <div class="d-flex flex-nowrap gap-3">
                       <span class="px-3">{{ $key +1}}.</span>
                       <span>{{ $value->message }}</span>
                        <form action="{{ route('message.update', ['message' => $value->id]) }}" method="post" class="mod-form d-none" data-id="{{ $value->id }}">
                            {{-- @dd($value) --}}
                                @csrf
                                @method('put')
                                <input type="text" name="msg" id="floatingInput" placeholder="{{ $value->message }}"class="editText">

                                <button type="submit" class="btn btn-outline-primary submit-mod" onclick="subMes({{ $value->id }})" data-id="{{ $value->id }}">確定修改</button>
                                <button type="button" class="btn btn-outline-secondary cancel-mod" onclick="cancelMes({{ $value->id }})" data-id="{{ $value->id }}">取消修改</button>
                        </form>
                    </div>
                   <div class="d-flex gap-1">
                    {{-- click edit no change view but give js function  --}}
                       <button type="button" class="btn btn-outline-primary edit-mesg" onclick="editBtn({{ $value->id }})" data-id="{{ $value->id }}">
                            編輯
                       </button>
                       {{-- click delete give form and submit-button and send data to route destroy--}}
                       <form action="{{ route('message.destroy',['message'=> $value->id]) }}" method="post" data-name="{{ $value->name }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-secondary" onclick="deleteAll({{ $value->id }})">刪除</button>
                       </form>
                   </div>
               </div>

                <!-- inner respond frame -->

                @foreach ($value->responseBoard as $rkey => $rvalue)
                {{-- @dd($rvalue->respond) --}}
                    <div class=" d-flex justify-content-between border border-2 rounded-5 p-2 mx-5 my-3" id="replyForm{{ $rvalue->id }}">
                        <div class="d-flex flex-nowrap gap-3">
                            <span class="px-3">{{ $key +1}}-{{ $rkey +1}}.</span>
                            <span> {{ $rvalue->respond }} </span>

                            <form action="{{ route('message.update',['message'=> $rvalue->id]) }}" method="POST" class="mod-form d-none" data-id="{{ $rvalue->id }}">
                                @csrf
                                @method('put')
                                <input type="text" name="resp" id="floatingInput" placeholder="{{ $rvalue->respond }}">

                                <button type="submit" class="btn btn-outline-primary submit-mod" onclick="subMes({{ $rvalue->id }})" data-id="{{ $rvalue->id }}">確定修改</button>
                                <button type="button" class="btn btn-outline-secondary cancel-mod" onclick="cancelMes({{ $rvalue->id }})" data-id="{{ $rvalue->id }}">取消修改</button>
                            </form>
                        </div>
                        <div class="d-flex gap-1">
                            <button type="button" class="btn btn-outline-primary edit-mesg" onclick="editBtn({{ $rvalue->id }})" data-id="{{ $rvalue->id }}">
                                編輯
                            </button>
                            <form action="{{ route('message.destroy',['message'=> $rvalue->id]) }}" method="post" data-name="{{ $rvalue->name }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-secondary" onclick="deleteAll({{ $rvalue->id }})">刪除</button>
                        </form>
                        </div>
                    </div>
                @endforeach

                {{-- replyBoard --}}
                <form action="{{ route('message.store') }}" method="POST" id="replyBoard{{ $value->id }} ">
                    @csrf
                    <div class="position-relative">
                        <input type="text" name="id" value="{{$value->id}}" hidden>
                        <textarea name="resp" class="w-75 p-2 mx-5" style="resize: none; min-height:150px;"placeholder="建立新回復"></textarea>
                        <button type="submit" class="position-absolute top-50 btn btn-outline-success">送出回復</button>
                    </div>

                </form>

            @endforeach

        </div>
        {{-- messageBoard --}}

        <form action="{{ route('message.store') }}" method="POST" >
            @csrf
            <div class="position-relative">
                <input type="text" name="id" value="" hidden>
                <textarea name="msg"  class="w-75 p-2 mx-5 my-5 " style="resize: none; min-height:150px;" placeholder="建立新留言"></textarea>
                <button type="submit" class="position-absolute top-50 btn btn-success">送出留言</button>
            </div>
        </form>
    </div>
@endsection

@section('js')
<script>

function editBtn(id) {
    const bigForm = document.querySelector(`.mod-form[data-id="${id}"]`);
    const editBtn = document.querySelector(`.edit-mesg[data-id="${id}"]`);

    if(editBtn) {
        bigForm.classList.remove('d-none');
    }
}

function cancelMes(id) {
    const bigForm = document.querySelector(`.mod-form[data-id="${id}"]`);
    const cancelMes = document.querySelector(`.cancel-mod[data-id="${id}"]`);

    if(cancelMes) {
        bigForm.classList.add('d-none');
    }
}

function subMes(id) {
    const bigForm = document.querySelector(`.mod-form[data-id="${id}"]`);
    const subMes = document.querySelector(`.submit-mod[data-id="${id}"]`);

    if(subMes) {
        bigForm.classList.add('d-none');
    }
}

function deleteAll(id) {
    console.log(id);
    Swal.fire({
        title:'要刪除?',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText:'刪除',
    }).then((result) => {
        Swal.fire('執行刪除')
        const formData = new FormData();
        formData.append('_token', '{{ csrf_token() }}');
        formData.append('_method', 'delete');
        fetch(`/message/destroy/${id}`,{
            method: 'POST',
            body: formData,
        }).then((res) => {
            return res.text();
        }).then((data) => {
            if(data != 'success') return
            const mesgForm = document.querySelector(`#mesgForm${id}`);
            const replyBoard = document.querySelector(`#replyBoard${id}`);
            const replyForm = document.querySelector(`#replyForm${id}`);
            mesgForm.remove();
            replyBoard.remove();
            replyForm.remove();

        });
        if(result.isDenied){
            Swal.fire('noo')
        }
    })
}

</script>

@endsection
