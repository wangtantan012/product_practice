@extends('template.fronttemplate')

@section('main')
    <div class="container">
        <form action="{{ route('user.inform.update') }}" method="POST" >
            @csrf
            <h1>帳號資訊</h1>
            <div>帳號: <span>{{ $user->email }}</span></div>
            <div>
                <div class="mb-2">姓名:
                    <span class="username">{{ $user->name }}</span>
                    <input type="text" name="name" value="{{ $user->name }}" class="d-none">
                </div>
            </div>
            {{-- @foreach ($errors->all() as $item)
                {{ $item }}
            @endforeach --}}
            <div class="d-flex gap-2 ">
                <button type="button" class="btnEdit btn btn-outline-primary" onclick="editMode() ">編輯</button>
                <div class="btns d-none">
                    <button type="button" class="btn btn-outline-secondary" onclick="cancelBtn()">取消</button>
                    <button type="submit" class="btn btn-outline-primary ">確認送出</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function editMode() {
            const nameInput = document.querySelector('input[name="name"]');
            const username = document.querySelector('.username');
            const btnEdit = document.querySelector('.btnEdit');
            const btns = document.querySelector('.btns');
            username.classList.add('d-none');
            nameInput.classList.remove('d-none');
            btnEdit.classList.add('d-none');
            btns.classList.remove('d-none');
        }
        function cancelBtn() {
            const nameInput = document.querySelector('input[name="name"]');
            const username = document.querySelector('.username');
            const btnEdit = document.querySelector('.btnEdit');
            const btns = document.querySelector('.btns');
            username.classList.remove('d-none');
            nameInput.classList.add('d-none');
            btnEdit.classList.remove('d-none');
            btns.classList.add('d-none');
        }
    </script>
    @if($errors->first())
        <script>
            Swal.fire({
                icon: 'error',
                title: '{{ $errors->first() }}',
            })
        </script>
    @endif

@endsection
