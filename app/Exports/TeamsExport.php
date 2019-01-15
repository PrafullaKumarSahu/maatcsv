<?php

namespace App\Exports;

use App\Team;
use Maatwebsite\Excel\Concerns\FromCollection;

class TeamsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Team::all();
    }
}
