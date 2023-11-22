<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Ppshb;
use Alert;

class PpshbController extends Controller
{
    public function ppshb()
    {
        // $data = Team::orderBy('id', 'DESC')->paginate();
        return view('admin.ppshb.index');
    }

    // Daftar PPSHB
    function regist()
    {
        return view('guest.registration');
    }
    public function addregist(Request $request)
    {
        if ($request['password'] == $request['conf-password']) {
            $data = new User();
            $data->name     = $request['name'];
            $data->username     = $request['username'];
            $data->email    = $request['email'];
            $data->asal_sekolah    = $request['asal_sekolah'];
            $data->address    = $request['address'];
            $data->admin    = 'user';
            $data->password = Hash::make($request['password']);
            $data->password_real    = $request['password'];
            $data->no_tlp    = $request['telf'];
            $data->tempat_lahir    = $request['tempat'];
            $data->tgl_lahir    = $request['tgl_lahir'];
            $data->save();
            $ppshb = new Ppshb();
            $ppshb->id_users = $data->id;
            $ppshb->save();
            Alert()->success('Berhasil Mendaftar', 'Silahkan masukkan email dan Password');
            return redirect()->route('login');
        } else {
            toast('Password Tidak Sesuai', 'error');
            return redirect()->route('regist');
        }
    }

    // Pemberkasan Pendaftaran
    public function main()
    {
        $data = Ppshb::where('id_users', Auth::user()->id)->get();
        // dd($data);
        return view('admin.ppshb.main', compact('data'));
    }

    function editmain(Request $request, $id)
    {
        $data = Ppshb::where('id_users', $id)->first();
        // dd($data);
        if ($request->has('pasphoto')) {
            $image = $request->file('pasphoto');
            $file_extension = $request->file('pasphoto')->getClientOriginalExtension();
            $filename = Auth::user()->email . rand(100, 999) . '.' . $file_extension;;
            $image->move('img/berkas/', $filename);
            $data->pasphoto = $filename;
        }
        $data->save();
        return redirect()->route('main');
    }
}
