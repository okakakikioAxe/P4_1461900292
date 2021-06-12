@extends('template.main0292')

@section('title','tambah user')

@section('konten')
    <div class="container">
        <a class="btn btn-success" href="{{ route('user.index') }}" role="button">Kembali</a>
    </div>
    <br>
    <br>
@endsection

@section('konten2')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <h3 class="text-center">Tambah User</h3>
                <br>
                <br>
                <form action="{{ route('user.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                        <div class="mb-3">
                            <label for="pw1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="pw1" name="pw1">
                        </div>
                        <div class="mb-3">
                            <label for="pw2" class="form-label">Ketik ulang password</label>
                            <input type="password" class="form-control" id="pw2" name="pw2">
                        </div>
                    <br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" onclick="return confirm('apakah data tersebut sudah benar?');">Tambah</button>
                    </div>
                </form>
            </div>
            <div class="col"></div>
        
        </div>
        <br>
        <br>
    </div>
@endsection