<?php

namespace App\Imports;

use App\Donasi;
use Maatwebsite\Excel\Concerns\ToModel;

class DonasiImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Donasi([
            'nama' => $row[1],
            'alamat' => $row[2], 
        ]);
    }
}
