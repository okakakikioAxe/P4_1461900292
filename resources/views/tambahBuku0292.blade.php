@extends('template.main0292')

@section('title','tambah buku')

@section('konten')
    <div class="container">
        <a class="btn btn-success" href="{{ route('buku.index') }}" role="button">Kembali</a>
    </div>
    <br>
    <br>
@endsection

@section('konten2')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <h3 class="text-center">Tambah Buku</h3>
                <br>
                <br>
                <form action="{{ route('buku.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul buku</label>
                        <input type="text" class="form-control" id="judul" name="judul">
                    </div>
                    <div class="mb-3">
                        <label for="tahun" class="form-label">Tahun terbit</label>
                        <input type="text" class="form-control" id="tahun" name="tahun">
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