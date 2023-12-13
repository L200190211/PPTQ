<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    // PAGE BERANDA
    public function beranda()
    {
        $team = Team::take(4)->orderBy('id', 'DESC')->get();
        // dd($team); 
        return view('guest.beranda', compact('team'));
    }
    public function profile()
    {
        return view('guest.profile');
    }
    public function galeri()
    {
        return view('guest.galeri');
    }
    public function psshb()
    {
        return view('guest.psshb');
    }

    public function contact()
    {
        return view('guest.contact');
    }
    public function unitmts()
    {
        return view('guest.unit-mts');
    }
    public function unitma()
    {
        return view('guest.unit-ma');
    }
    public function tahfiz()
    {
        return view('guest.divisi-tahfiz');
    }
    public function santri()
    {
        return view('guest.divisi-santri');
    }
}
