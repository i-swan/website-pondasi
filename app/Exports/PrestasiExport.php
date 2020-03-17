<?php

namespace App\Exports;

use App\Prestasi;
use Maatwebsite\Excel\Concerns\FromCollection;

class PrestasiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Prestasi::all();
    }
}
