<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Ppshb;
use App\Models\CompPpshb;
use Alert;

class CompPpshbController extends Controller
{
    function complementary()
    {
        $data = CompPpshb::where('id_users', Auth::user()->id)->get();
        return view('admin.ppshb.complementary', compact('data'));
    }

    public function add()
    {
        return view('admin.ppshb.add');
    }
    public function addcompId(Request $request)
    {
        $data = new CompPpshb();
        $data->id_users    = Auth::id();
        $data->title    = $request['title'];
        $data->desc    = $request['desc'];

        if ($request->has('document')) {
            $image = $request->file('document');
            $file_extension = $request->file('document')->getClientOriginalExtension();
            $filename = 'comp-' . Auth::user()->id . rand(100, 999) . '.' . $file_extension;;
            $image->move('img/berkas/', $filename);
            $data->document = $filename;
        }
        $data->save();
        return redirect()->route('complementary');
    }
}
