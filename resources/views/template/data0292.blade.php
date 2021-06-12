@extends('template.main0292')

@section('konten')
    <div class="container">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Daftar Data
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="{{ route('buku.index') }}">Buku</a></li>
                <li><a class="dropdown-item" href="{{ route('jenis.index') }}">Jenis Buku</a></li>
                <li><a class="dropdown-item" href="{{ route('rak.index') }}">Rak Buku</a></li>
                <li><a class="dropdown-item" href="#">User</a></li>
            </ul>
        </div>
    </div>
    <br>
    
@endsection

