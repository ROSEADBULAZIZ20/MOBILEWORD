<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\session;

class EmployeeController extends Controller
{
    public function GetEmpid(Request $request){
        dd($request->session()->get('empid'));
    }
    //
}
