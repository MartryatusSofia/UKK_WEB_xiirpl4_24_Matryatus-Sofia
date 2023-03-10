<?php

namespace App\Exports;

use App\Models\Buku;
use App\Exports\DatabukuExport;
use Maatwebsite\Excel\Concerns\FromCollection;

class DatabukuExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Buku::all();
    }
}
