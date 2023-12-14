<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $aktif = User::where('status', 'Active')->where(
            function ($query) {
                return $query->where('admin', 'user');
            }
        )->count();
        $pause = User::where('status', 'Pause')->where(
            function ($query) {
                return $query->where('admin', 'user');
            }
        )->count();
        return view('admin.beranda', compact('aktif', 'pause'));
    }
}
