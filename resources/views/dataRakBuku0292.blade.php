@extends('template/data0292')

@section('title','data rak buku')

@section('konten2')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <div class="container text-center">
                    <h3>Data Rak Buku</h3>
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
                    <form action="{{ route('rak.search') }}" class="d-flex" method="post">
                        @csrf
                        <input class="form-control me-2" type="text" id="data" name="data" placeholder="isikan id rak" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col">
                    <form class="btn btn-sm" action="{{ route('rak.excel') }}" method="post">
                        @csrf
                        @method('POST')
                        <button type="submit" class="btn-submit " >
                        <a class="btn btn-success" role="button">Export</a>
                        </button>
                    </form>
                    <a class="btn btn-primary" href="{{ route('rak.create') }}" role="button">Tambah+</a>
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
                <th scope="col" style="width:20%;">ID Rak</th>
                <th scope="col" style="width:20%;">ID Buku</th>
                <th scope="col" style="width:20%;">ID Jenis Buku</th>
                <th scope="col" style="width:15%;">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $no = 1; ?>
            @foreach ($data as $rak)
            <tr>
                <th scope="row"><?php echo $no ?></th>
                <td>{{ $rak->id }}</td>
                <td>{{ $rak->id_buku }}</td>
                <td>{{ $rak->id_jenis_buku }}</td>
                <td>
                            <a class="btn btn-sm" href="{{ route('rak.edit', $rak->id) }}" role="button">
                                <img src="{{ asset('gambar/edit.png') }}" alt="lihat">
                            </a>
                            <form class="btn btn-sm" action="{{ route('rak.destroy', $rak->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-submit" onclick=" return confirm('apakah anda yakin ingin menghapus data ini?');">
                                    <img src="{{ asset('gambar/delete.png') }}" alt="lihat">
                                </button>
                            </form>
                </td>
            </tr>
            <?php $no++ ?>
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