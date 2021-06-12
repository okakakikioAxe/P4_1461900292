@extends('template.main0292')

@section('title','edit buku')

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
                <h3 class="text-center">Edit Buku</h3>
                <br>
                <br>
                @foreach ($data as $buku)
                    <form action="{{ route('buku.update',$buku->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="id" class="form-label">ID buku</label>
                            <input type="text" readonly class="form-control" id="id" name="id" value="{{ $buku->id }}">
                        </div>
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul buku</label>
                            <input type="text" class="form-control" id="judul" name="judul" value="{{ $buku->judul }}">
                        </div>
                        <div class="mb-3">
                            <label for="tahun" class="form-label">Tahun terbit</label>
                            <input type="text" class="form-control" id="tahun" name="tahun" value="{{ $buku->tahun_terbit }}">
                        </div>
                        <br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" onclick="return confirm('apakah data tersebut sudah benar?');">Simpan</button>
                        </div>
                        
                    </form>
                @endforeach
                
            </div>
            <div class="col"></div>
        
        </div>
        
    </div>
@endsection