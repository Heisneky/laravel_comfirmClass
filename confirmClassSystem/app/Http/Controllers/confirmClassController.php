<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class confirmClassController extends Controller
{
    public function showTable(Request $request) {
        $query = $request->input('query');

        // Query data based on search query if it exists
        if ($query) {
            $data = DB::table('confirm_class')
                        ->where('name', 'like', "%$query%")
                        ->orWhere('program', 'like', "%$query%")
                        ->orWhere('course', 'like', "%$query%")
                        ->orderBy('id', 'desc')
                        ->paginate(5);
        } else {
            // If no search query, fetch all data
            $data = DB::table('confirm_class')->orderBy('id', 'desc')->paginate(5);
        }

        return view('confirmClass', compact('data'));
    }
}
