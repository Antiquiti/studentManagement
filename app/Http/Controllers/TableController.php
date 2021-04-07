<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function receiveData(Request $request)
    {
        $data = $request->input();
        return view('welcome', compact('data'));
    }
}
