<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PpshbController extends Controller
{
    public function ppshb()
    {
        // $data = Team::orderBy('id', 'DESC')->paginate();
        return view('admin.ppshb.index');
    }
}
