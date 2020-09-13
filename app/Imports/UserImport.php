<?php

namespace App\Imports;
use App\User;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;

class UserImport implements ToModel
{

    public function model(array  $row)
    {
        return new User([
           'name'=>$row[0],
            'email'=>$row[1],
            'password'=>$row[2],
        ]);
    }
}
