<?php

namespace App\Exports;

use App\Kegiatan;
use Maatwebsite\Excel\Concerns\FromCollection;

class KegiatanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kegiatan::all();
    }
}
