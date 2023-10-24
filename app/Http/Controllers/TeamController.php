<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    public function team()
    {
        $data = Team::orderBy('id', 'DESC')->paginate();
        return view('admin.team.index', compact('data'));
    }
    public function add()
    {
        return view('admin.team.add');
    }
    public function addteamId(Request $request)
    {
        $data = new Team();
        $data->name     = $request['name'];
        $data->title    = $request['title'];
        $data->email    = $request['email'];
        $data->phone    = $request['phone'];

        if ($request->has('sampul')) {
            $image = $request->file('sampul');
            $filename = $image->getClientOriginalName();
            $image->move('img/sampul/', $filename);
            $data->sampul = $request->file('sampul')->getClientOriginalName();
        }
        $data->save();
        return redirect()->route('team');
    }
    public function editteam($id)
    {
        $data   = Team::find($id);
        return view('admin.team.edit', compact('data'));
    }
    public function editteamId(Request $request, $id)
    {
        $data = Team::find($id);
        $data->name     = $request['name'];
        $data->title   = $request['title'];
        $data->email       = $request['email'];
        $data->phone    = $request['phone'];

        if ($request->has('sampul')) {
            $image = $request->file('sampul');
            $rand = Str::random(5);
            $filename = $image->getClientOriginalName();
            $image->move('img/sampul/', $filename);
            $data->sampul = $request->file('sampul')->getClientOriginalName();
        }
        $data->save();
        return redirect()->route('team');
    }
    public function delteam($id)
    {
        $data = Team::find($id);
        $data->delete();
        return redirect()->route('team');
    }
}
