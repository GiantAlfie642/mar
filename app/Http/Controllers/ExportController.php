<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;


class ExportController extends Controller
{
    //
    public function wsx(){

        return Excel::download(new UsersExport, 'users.xlsx');

    }
}
