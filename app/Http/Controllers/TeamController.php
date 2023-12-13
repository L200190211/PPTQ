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
            $file_extension = $request->file('sampul')->getClientOriginalExtension();
            $filename = rand(1, 20) . '-' . rand(100, 999) . '.' . $file_extension;;
            $image->move('img/sampul/', $filename);
            $data->sampul = $filename;
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

        if ($request->has('sampul'))
            //  if data not null ->for edit
            if (isset($data->sampul)) {
                $path = public_path() . "/img/sampul/" . $data->sampul;
                if (file_exists($path)) {
                    $FilePath = Team::select('sampul')->where('id', $id)->first();
                    $path = public_path() . "/img/sampul/" . $FilePath->sampul;
                    unlink($path);
                    $image = $request->file('sampul');
                    $file_extension = $request->file('sampul')->getClientOriginalExtension();
                    $filename = rand(1, 20) . '-'  . rand(100, 999) . '.' . $file_extension;
                    $image->move('img/sampul/', $filename);
                    $data->sampul = $filename;
                    $data->save();
                    return redirect()->route('team');
                } else {
                    $image = $request->file('sampul');
                    $file_extension = $request->file('sampul')->getClientOriginalExtension();
                    $filename = rand(1, 20) . '-'  . rand(100, 999) . '.' . $file_extension;;
                    $image->move('img/sampul/', $filename);
                    $data->sampul = $filename;
                    $data->save();
                    return redirect()->route('team');
                }
            } else {
                // if data null ->for add new
                $image = $request->file('sampul');
                $file_extension = $request->file('sampul')->getClientOriginalExtension();
                $filename = rand(1, 20) . '-'  . rand(100, 999) . '.' . $file_extension;;
                $image->move('img/sampul/', $filename);
                $data->sampul = $filename;
                $data->save();
                return redirect()->route('team');
            }
    }
    public function delteam($id)
    {
        $FilePath = Team::select('sampul')->where('id', $id)->first();
        $path = public_path() . "/img/sampul/" . $FilePath->sampul;
        unlink($path);
        $data = Team::find($id);
        $data->delete();
        return redirect()->route('team');
    }
}
