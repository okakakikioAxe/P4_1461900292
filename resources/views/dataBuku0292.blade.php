@extends('template/data0292')

@section('title','data buku')

@section('konten2')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <div class="container text-center">
                    <h3>Data Buku</h3>
                </div>
            </div>
            <div class="col">
                
            </div>
        </div>
    </div>
    <br>

    <div class="container text-center">
        <div class="row">
            <div class="row">
                <div class="col mx-1">
                    <form action="#" class="d-flex" method="get">
                        @csrf
                        <input class="form-control me-2" type="search" id="cari" name="cari" placeholder="isikan id / judul" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col">
                    <a class="btn btn-primary" href="#" role="button">Tambah+</a>
                </div>
            </div>
        </div>
    </div>
    <br>


<div class="container">
    <table class="table text-center" id="tabel">
        <thead>
            <tr>
                <th scope="col" style="width:5%;">No</th>
                <th scope="col" style="width:20%;">ID Buku</th>
                <th scope="col" style="width:20%;">Judul Buku</th>
                <th scope="col" style="width:20%;">Tahun Terbit</th>
                <th scope="col" style="width:15%;">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $buku)
            <tr>
                <th scope="row">1</th>
                <td>{{ $buku->id }}</td>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->tahun_terbit }}</td>
                <td>
                            <a class="btn btn-sm" href="#" role="button">
                                <img src="{{ asset('gambar/edit.png') }}" alt="lihat">
                            </a>
                            <form class="btn btn-sm" action="#" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-submit" onclick=" return confirm('apakah anda yakin ingin menghapus data ini?');">
                                    <img src="{{ asset('gambar/delete.png') }}" alt="lihat">
                                </button>
                            </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

@section('style')
    <style>
        #tabel tr:hover {
            background-color: #ddd;
        }
        img{
            width:20px;
            height:auto;
        }
        .btn-submit{
            
            border: none;
            outline: none;
            background: none;
            cursor: pointer;
            color: #0000EE;
            padding: 0;
            text-decoration: underline;
            font-family: inherit;
            font-size: inherit;
        }
    </style>
@endsection