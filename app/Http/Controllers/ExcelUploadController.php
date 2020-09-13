<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Http\Request;
use App\Imports\UserImport;
=======
use App\Imports\UserImport;
use App\User;
use Illuminate\Http\Request;
>>>>>>> 373d37e3791dae0e0379ad040a688e9264169e32
use Maatwebsite\Excel\Facades\Excel;

class ExcelUploadController extends Controller
{
    public function userImportView()
    {
        return view('users.upload');
<<<<<<< HEAD

    }
    public function userImport()
    {
        Excel::import(new UserImport,request()->file('file'));
=======
    }

    public function userImport()
    {
        Excel::import(new UserImport, request()->file('file'));

>>>>>>> 373d37e3791dae0e0379ad040a688e9264169e32
        return back();
    }
}
