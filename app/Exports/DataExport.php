<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;

class DataExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $data = DB::table('rak_buku')
            ->join('buku', 'rak_buku.id_buku', '=', 'buku.id')
            ->join('jenis_buku', 'rak_buku.id_jenis_buku', '=', 'jenis_buku.id')
            ->select('rak_buku.*','buku.judul','buku.tahun_terbit', 'jenis_buku.jenis')
            ->orderBy('rak_buku.id','asc')->get();
        return $data;
    }
}
