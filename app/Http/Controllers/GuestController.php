<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function beranda()
    {
        return view('guest.beranda');
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
}
