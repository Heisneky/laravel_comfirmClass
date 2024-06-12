<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class confirmClassController extends Controller
{
    public function showTable() {
        $data = DB::table('confirm_class')->orderBy('id', 'desc')->paginate(5);
        return view('confirmClass', compact('data'));
    }
}
