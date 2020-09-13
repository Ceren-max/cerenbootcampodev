<?php

namespace App\Imports;
<<<<<<< HEAD
use App\User;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
=======

use App\User;
>>>>>>> 373d37e3791dae0e0379ad040a688e9264169e32
use Maatwebsite\Excel\Concerns\ToModel;

class UserImport implements ToModel
{
<<<<<<< HEAD

    public function model(array  $row)
    {
        return new User([
           'name'=>$row[0],
            'email'=>$row[1],
            'password'=>$row[2],
=======
    public function model(array $row)
    {
        return new User([
            'name' => $row[0],
            'email' => $row[1],
            'password' => $row[2]
>>>>>>> 373d37e3791dae0e0379ad040a688e9264169e32
        ]);
    }
}
