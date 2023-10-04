<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function team()
    {
        return view('admin.team.index');
    }
    public function add()
    {
        return view('admin.team.add');
    }
}
