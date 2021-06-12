@extends('template.main0292')

@section('title','edit rak buku')

@section('konten')
    <div class="container">
        <a class="btn btn-success" href="{{ route('rak.index') }}" role="button">Kembali</a>
    </div>
    <br>
    <br>
@endsection

@section('konten2')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <h3 class="text-center">Edit Rak Buku</h3>
                <br>
                <br>
                @foreach ($data as $rak)
                    <form action="{{ route('rak.update',$rak->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="id" class="form-label">ID rak</label>
                            <input type="text" readonly class="form-control" id="id" name="id" value="{{ $rak->id }}">
                        </div>
                        <div class="mb-3">
                            <label for="buku" class="form-label">ID buku</label>
                            <input type="text" class="form-control" id="buku" name="buku" value="{{ $rak->id_buku }}">
                        </div>
                        <div class="mb-3">
                            <label for="jenis" class="form-label">ID jenis buku</label>
                            <input type="text" class="form-control" id="jenis" name="jenis" value="{{ $rak->id_jenis_buku }}">
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