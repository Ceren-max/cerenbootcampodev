<?php

namespace App\Http\Controllers;

use App\Exports\UserExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelDownloadController extends Controller
{
<<<<<<< HEAD
    public function userDownload(){
     return Excel::download(new UserExport,'users.xlsx');
=======
    public function userDownload()
    {
        return Excel::download(new UserExport, 'users.xlsx');
>>>>>>> 373d37e3791dae0e0379ad040a688e9264169e32
    }
}
