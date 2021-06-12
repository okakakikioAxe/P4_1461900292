@extends('template.main0292')

@section('title','tambah rak buku')

@section('konten')
    <div class="container">
        <a class="btn btn-success" href="{{ route('jenis.index') }}" role="button">Kembali</a>
    </div>
    <br>
    <br>
@endsection

@section('konten2')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <h3 class="text-center">Tambah Rak Buku</h3>
                <br>
                <br>
                <form action="{{ route('rak.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="buku" class="form-label">ID buku</label>
                        <input type="text" class="form-control" id="buku" name="buku">
                    </div>
                    <div class="mb-3">
                        <label for="jenis" class="form-label">ID jenis buku</label>
                        <input type="text" class="form-control" id="jenis" name="jenis">
                    </div>
                    <br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" onclick="return confirm('apakah data tersebut sudah benar?');">Tambah</button>
                    </div>
                    
                </form>
            </div>
            <div class="col"></div>
        
        </div>
        
    </div>
@endsection