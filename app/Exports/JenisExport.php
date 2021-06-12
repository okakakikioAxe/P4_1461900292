<?php

namespace App\Exports;

use App\Models\JenisBuku;
use Maatwebsite\Excel\Concerns\FromCollection;

class JenisExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return JenisBuku::all();
    }
}
