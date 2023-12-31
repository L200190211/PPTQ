<?php

namespace App\Http\Controllers;

use App\Models\DatePpshb;
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
    public function team()
    {
        $team = Team::orderBy('id', 'DESC')->paginate(12);;
        return view('guest.team', compact('team'));
    }
    public function psshb()
    {
        $date = DatePpshb::find(1);
        return view('guest.psshb', compact('date'));
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
    public function divisitahfiz()
    {
        return view('guest.divisi-tahfiz');
    }
    public function divisisantri()
    {
        return view('guest.divisi-santri');
    }
}
