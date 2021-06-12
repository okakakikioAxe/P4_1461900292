<?php

namespace App\Exports;

use App\Models\RakBuku;
use Maatwebsite\Excel\Concerns\FromCollection;

class RakExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return RakBuku::all();
    }
}
