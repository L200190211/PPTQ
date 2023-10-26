<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function profile()
    {
        $data = User::find(Auth::user()->id);
        return view('admin.users.profile', compact('data'));
    }
    public function edituser(Request $request)
    {
        $data = User::find(Auth::user()->id);
        if ($data) {
            $data->username = $request['username'];
            $data->name     = $request['name'];
            $data->email    = $request['email'];
            $data->no_tlp   = $request['no_tlp'];
            $data->save();
            return redirect()->route('user');
        } else {
            return redirect()->back();
        }
    }
    public function reset()
    {
        return view('admin.users.reset-password');
    }
    public function resetpassword(Request $request)
    {
        $data = User::findOrFail(Auth::user()->id);
        $this->validate($request, [
            'password' => ['required'],
            'newpassword' => ['min:5', 'required'],
        ]);

        if (Hash::check($request->password, $data->password)) {
            if ($data) {
                $data->password = Hash::make($request['newpassword']);
                $data->password_real = $request['newpassword'];
                $data->save();}
        } else {

        }
    }

    // Pemberkasan
    function regist(){
        return view('guest.registration');
    }
    public function addregist(Request $request) {
        $data = new User();
        $data->name     = $request['name'];
        $data->username     = $request['username'];
        $data->email    = $request['email'];
        $data->address    = $request['address'];
        $data->admin    = 'user';
        $data->password = Hash::make($request['password']);
        $data->password_real    = $request['password'];
        $data->tempat_lahir    = $request['tempat'];
        $data->tgl_lahir    = $request['tgl_lahir'];

        $data->save();
        return redirect()->route('login');
    }
}
