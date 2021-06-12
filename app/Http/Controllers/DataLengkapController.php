<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\JenisBuku;
use App\Models\RakBuku;
use Illuminate\Support\Facades\DB;

class DataLengkapController extends Controller
{
    public function index()
    {
        $data = DB::table('rak_buku')
            ->join('buku', 'rak_buku.id_buku', '=', 'buku.id')
            ->join('jenis_buku', 'rak_buku.id_jenis_buku', '=', 'jenis_buku.id')
            ->select('rak_buku.*','buku.judul','buku.tahun_terbit', 'jenis_buku.jenis')
            ->orderBy('rak_buku.id','asc')->get();
        return view ('dataLengkap0292', ['data' => $data]);
    }

    public function find(Request $request)
    {
        $data = DB::table('rak_buku')
            ->join('buku', 'rak_buku.id_buku', '=', 'buku.id')
            ->join('jenis_buku', 'rak_buku.id_jenis_buku', '=', 'buku.id')
            ->select('rak_buku.id','rak_buku.id_buku','buku.judul','buku.tahun_terbit', 'rak_buku.id_jenis_buku', 'jenis_buku.jenis')
            ->where('id', $request->data)->get();
        return view ('dataLengkap0292');
    }
}
