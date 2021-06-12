<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Exports\DataExport;


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
            ->join('jenis_buku', 'rak_buku.id_jenis_buku', '=', 'jenis_buku.id')
            ->select('rak_buku.*','buku.judul','buku.tahun_terbit', 'jenis_buku.jenis')
            ->where('rak_buku.id', $request->data)->orderBy('rak_buku.id','asc')->get();
        return view ('dataLengkap0292', ['data' => $data]);
    }

    public function excel()
    {  
        return Excel::download(new DataExport, 'Data_1461900292.xlsx');   
    }
}
