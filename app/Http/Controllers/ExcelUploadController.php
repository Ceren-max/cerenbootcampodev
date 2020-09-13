<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UserImport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelUploadController extends Controller
{
    public function userImportView()
    {
        return view('users.upload');

    }
    public function userImport()
    {
        Excel::import(new UserImport,request()->file('file'));
        return back();
    }
}
