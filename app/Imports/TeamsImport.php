<?php

namespace App\Imports;

use App\Team;
use Maatwebsite\Excel\Concerns\ToModel;

class TeamsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Team([
            'name'     => $row[0],
            'description'    => $row[1], 
         ]);
    }
}
