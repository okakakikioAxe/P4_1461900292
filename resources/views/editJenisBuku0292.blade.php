@extends('template.main0292')

@section('title','edit jenis buku')

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
                <h3 class="text-center">Edit Jenis Buku</h3>
                <br>
                <br>
                @foreach ($data as $jenis)
                    <form action="{{ route('jenis.update',$jenis->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="id" class="form-label">ID Jenis</label>
                            <input type="text" readonly class="form-control" id="id" name="id" value="{{ $jenis->id }}">
                        </div>
                        <div class="mb-3">
                            <label for="jenis" class="form-label">Jenis buku</label>
                            <input type="text" class="form-control" id="jenis" name="jenis" value="{{ $jenis->jenis }}">
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