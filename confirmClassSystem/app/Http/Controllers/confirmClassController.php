<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class confirmClassController extends Controller
{
    public function showTable(Request $request) {
        $query = $request->input('query');
    
        if ($query) {
            $data = DB::table('confirm_class')
                        ->where('name', 'like', "%$query%")
                        ->orderBy('id', 'desc')
                        ->paginate(15);
        } else {
            $data = DB::table('confirm_class')->orderBy('id', 'desc')->paginate(15);
        }
    
        return view('confirmClass', compact('data'));
    }

    public function searchByProgram(Request $request) {
        $query = $request->input('query');
    
        if ($query) {
            $data = DB::table('confirm_class')
                        ->where('program', 'like', "%$query%")
                        ->orderBy('id', 'desc')
                        ->paginate(15);
        } else {
            $data = DB::table('confirm_class')->orderBy('id', 'desc')->paginate(15);
        }
    
        return view('confirmClass', compact('data'));
    }

    public function searchByCourse(Request $request) {
        $query = $request->input('query');
    
        if ($query) {
            $data = DB::table('confirm_class')
                        ->where('course', 'like', "%$query%")
                        ->orderBy('id', 'desc')
                        ->paginate(15);
        } else {
            $data = DB::table('confirm_class')->orderBy('id', 'desc')->paginate(15);
        }
    
        return view('confirmClass', compact('data'));
    }  

    public function searchByCreatedAt(Request $request) {
        $query = $request->input('query');
    
        if ($query) {
            $data = DB::table('confirm_class')
                        ->whereDate('created_at', '=', $query)
                        ->orderBy('id', 'desc')
                        ->paginate(15);
        } else {
            $data = DB::table('confirm_class')->orderBy('id', 'desc')->paginate(15);
        }
    
        return view('confirmClass', compact('data'));
    }
    
    public function searchByUpdatedAt(Request $request) {
        $query = $request->input('query');
    
        if ($query) {
            $data = DB::table('confirm_class')
                        ->whereDate('updated_at', '=', $query)
                        ->orderBy('id', 'desc')
                        ->paginate(15);
        } else {
            $data = DB::table('confirm_class')->orderBy('id', 'desc')->paginate(15);
        }
    
        return view('confirmClass', compact('data'));
    }
    
    
}
