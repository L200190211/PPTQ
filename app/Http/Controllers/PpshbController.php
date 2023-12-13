<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\DatePpshb;
use App\Models\Ppshb;
use App\Models\User;
use Alert;

class PpshbController extends Controller
{
    // SUPERADMIN
    public function ppshb()
    {
        $data = Ppshb::orderBy('id_ppshb', 'DESC')->with('user')->get();
        return view('admin.ppshb.index', compact('data'));
    }

    public function view($id)
    {
        $data = Ppshb::where('id_users', $id)->with('user', 'comp_ppshb')->get();
        // dd($data);
        return view('admin.ppshb.view', compact('data'));
    }

    // Atur Rentang Pendaftaran PPSHB
    public function date(DatePpshb $datePpshb)
    {
        $data = DatePpshb::find($datePpshb);
        return view('admin.ppshb.date', compact('data'));
    }
    public function dateupdate($datePpshb, Request $request)
    {
        $data = DatePpshb::find($datePpshb);
        if ($request['start'] >= $request['end']) {
            toast('Tanggal tidak valid', 'error');
            return redirect()->route('date', 1);
        } else {
            $data->start     = $request['start'];
            $data->end   = $request['end'];
            $data->save();
            toast('Tanggal berhasil diinput', 'success');
            return redirect()->route('ppshb');
        }
    }

    // SISWA
    // Daftar PPSHB
    public function regist()
    {
        return view('guest.registration');
    }
    public function registclosed()
    {
        return view('guest.registration-closed');
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

    /*
    |--------------------------------------------------------------------------
    | PASPHOTO
    |--------------------------------------------------------------------------
    */
    function editphoto(Request $request, $id)
    {
        $data = Ppshb::where('id_users', $id)->first();
        if ($request->has('pasphoto')) {
            //  if data not null ->for edit
            if (isset($data->pasphoto)) {
                $path = public_path() . "/img/berkas/" . $data->pasphoto;
                if (file_exists($path)) {
                    $FilePath = Ppshb::select('pasphoto')->where('id_users', $id)->first();
                    $path = public_path() . "/img/berkas/" . $FilePath->pasphoto;
                    unlink($path);
                    $image = $request->file('pasphoto');
                    $file_extension = $request->file('pasphoto')->getClientOriginalExtension();
                    $filename = 'pasphoto-' . Auth::user()->id . rand(100, 999) . '.' . $file_extension;
                    $image->move('img/berkas/', $filename);
                    $data->pasphoto = $filename;
                    $data->save();
                    return redirect()->route('main');
                } else {
                    // if data null ->for add new
                    $image = $request->file('pasphoto');
                    $file_extension = $request->file('pasphoto')->getClientOriginalExtension();
                    $filename = 'pasphoto-' . Auth::user()->id . rand(100, 999) . '.' . $file_extension;;
                    $image->move('img/berkas/', $filename);
                    $data->pasphoto = $filename;
                    $data->save();
                    return redirect()->route('main');
                }
            } else {
                // if data null ->for add new
                $image = $request->file('pasphoto');
                $file_extension = $request->file('pasphoto')->getClientOriginalExtension();
                $filename = 'pasphoto-' . Auth::user()->id . rand(100, 999) . '.' . $file_extension;;
                $image->move('img/berkas/', $filename);
                $data->pasphoto = $filename;
                $data->save();
                return redirect()->route('main');
            }
        }
    }

    /*
    |--------------------------------------------------------------------------
    | RAPOT
    |--------------------------------------------------------------------------
    */
    function editrapot(Request $request, $id)
    {
        $data = Ppshb::where('id_users', $id)->first();
        if ($request->has('rapot')) {
            //  if data not null ->for edit
            if (isset($data->rapot)) {
                $path = public_path() . "/img/berkas/" . $data->rapot;
                if (file_exists($path)) {
                    $FilePath = Ppshb::select('rapot')->where('id_users', $id)->first();
                    $path = public_path() . "/img/berkas/" . $FilePath->rapot;
                    unlink($path);
                    $image = $request->file('rapot');
                    $file_extension = $request->file('rapot')->getClientOriginalExtension();
                    $filename = 'rapot-' . Auth::user()->id . rand(100, 999) . '.' . $file_extension;
                    $image->move('img/berkas/', $filename);
                    $data->rapot = $filename;
                    $data->save();
                } else {
                    // if data null ->for add new
                    $image = $request->file('rapot');
                    $file_extension = $request->file('rapot')->getClientOriginalExtension();
                    $filename = 'rapot-' . Auth::user()->id . rand(100, 999) . '.' . $file_extension;;
                    $image->move('img/berkas/', $filename);
                    $data->rapot = $filename;
                    $data->save();
                }
            } else {
                // if data null ->for add new
                $image = $request->file('rapot');
                $file_extension = $request->file('rapot')->getClientOriginalExtension();
                $filename = 'rapot-' . Auth::user()->id . rand(100, 999) . '.' . $file_extension;;
                $image->move('img/berkas/', $filename);
                $data->rapot = $filename;
                $data->save();
            }
            return redirect()->route('main');
        }
    }

    /*
    |--------------------------------------------------------------------------
    | IJAZAH
    |--------------------------------------------------------------------------
    */
    function editijazah(Request $request, $id)
    {
        $data = Ppshb::where('id_users', $id)->first();
        if ($request->has('ijazah')) {
            //  if data not null ->for edit
            if (isset($data->ijazah)) {
                $path = public_path() . "/img/berkas/" . $data->ijazah;
                if (file_exists($path)) {
                    $FilePath = Ppshb::select('ijazah')->where('id_users', $id)->first();
                    $path = public_path() . "/img/berkas/" . $FilePath->ijazah;
                    unlink($path);
                    $image = $request->file('ijazah');
                    $file_extension = $request->file('ijazah')->getClientOriginalExtension();
                    $filename = 'ijazah-' . Auth::user()->id . rand(100, 999) . '.' . $file_extension;
                    $image->move('img/berkas/', $filename);
                    $data->ijazah = $filename;
                    $data->save();
                } else {
                    // if data null ->for add new
                    $image = $request->file('ijazah');
                    $file_extension = $request->file('ijazah')->getClientOriginalExtension();
                    $filename = 'ijazah-' . Auth::user()->id . rand(100, 999) . '.' . $file_extension;;
                    $image->move('img/berkas/', $filename);
                    $data->ijazah = $filename;
                    $data->save();
                }
            } else {
                // if data null ->for add new
                $image = $request->file('ijazah');
                $file_extension = $request->file('ijazah')->getClientOriginalExtension();
                $filename = 'ijazah-' . Auth::user()->id . rand(100, 999) . '.' . $file_extension;;
                $image->move('img/berkas/', $filename);
                $data->ijazah = $filename;
                $data->save();
            }
            return redirect()->route('main');
        }
    }

    /*
    |--------------------------------------------------------------------------
    | SKL
    |--------------------------------------------------------------------------
    */
    function editskl(Request $request, $id)
    {
        $data = Ppshb::where('id_users', $id)->first();
        if ($request->has('skl')) {
            //  if data not null ->for edit
            if (isset($data->skl)) {
                $path = public_path() . "/img/berkas/" . $data->skl;
                if (file_exists($path)) {
                    $FilePath = Ppshb::select('skl')->where('id_users', $id)->first();
                    $path = public_path() . "/img/berkas/" . $FilePath->skl;
                    unlink($path);
                    $image = $request->file('skl');
                    $file_extension = $request->file('skl')->getClientOriginalExtension();
                    $filename = 'skl-' . Auth::user()->id . rand(100, 999) . '.' . $file_extension;
                    $image->move('img/berkas/', $filename);
                    $data->skl = $filename;
                    $data->save();
                } else {
                    // if data null ->for add new
                    $image = $request->file('skl');
                    $file_extension = $request->file('skl')->getClientOriginalExtension();
                    $filename = 'skl-' . Auth::user()->id . rand(100, 999) . '.' . $file_extension;;
                    $image->move('img/berkas/', $filename);
                    $data->skl = $filename;
                    $data->save();
                }
            } else {
                // if data null ->for add new
                $image = $request->file('skl');
                $file_extension = $request->file('skl')->getClientOriginalExtension();
                $filename = 'skl-' . Auth::user()->id . rand(100, 999) . '.' . $file_extension;;
                $image->move('img/berkas/', $filename);
                $data->skl = $filename;
                $data->save();
            }
            return redirect()->route('main');
        }
    }

    /*
    |--------------------------------------------------------------------------
    | KK
    |--------------------------------------------------------------------------
    */
    function editkk(Request $request, $id)
    {
        $data = Ppshb::where('id_users', $id)->first();
        if ($request->has('kk')) {
            //  if data not null ->for edit
            if (isset($data->kk)) {
                $path = public_path() . "/img/berkas/" . $data->kk;
                if (file_exists($path)) {
                    $FilePath = Ppshb::select('kk')->where('id_users', $id)->first();
                    $path = public_path() . "/img/berkas/" . $FilePath->kk;
                    unlink($path);
                    $image = $request->file('kk');
                    $file_extension = $request->file('kk')->getClientOriginalExtension();
                    $filename = 'kk-' . Auth::user()->id . rand(100, 999) . '.' . $file_extension;
                    $image->move('img/berkas/', $filename);
                    $data->kk = $filename;
                    $data->save();
                } else {
                    // if data null ->for add new
                    $image = $request->file('kk');
                    $file_extension = $request->file('kk')->getClientOriginalExtension();
                    $filename = 'kk-' . Auth::user()->id . rand(100, 999) . '.' . $file_extension;;
                    $image->move('img/berkas/', $filename);
                    $data->kk = $filename;
                    $data->save();
                }
            } else {
                // if data null ->for add new
                $image = $request->file('kk');
                $file_extension = $request->file('kk')->getClientOriginalExtension();
                $filename = 'kk-' . Auth::user()->id . rand(100, 999) . '.' . $file_extension;;
                $image->move('img/berkas/', $filename);
                $data->kk = $filename;
                $data->save();
            }
            return redirect()->route('main');
        }
    }

    /*
    |--------------------------------------------------------------------------
    | AKTA
    |--------------------------------------------------------------------------
    */
    function editakta(Request $request, $id)
    {
        $data = Ppshb::where('id_users', $id)->first();
        if ($request->has('akta')) {
            //  if data not null ->for edit
            if (isset($data->akta)) {
                $path = public_path() . "/img/berkas/" . $data->akta;
                if (file_exists($path)) {
                    $FilePath = Ppshb::select('akta')->where('id_users', $id)->first();
                    $path = public_path() . "/img/berkas/" . $FilePath->akta;
                    unlink($path);
                    $image = $request->file('akta');
                    $file_extension = $request->file('akta')->getClientOriginalExtension();
                    $filename = 'akta-' . Auth::user()->id . rand(100, 999) . '.' . $file_extension;
                    $image->move('img/berkas/', $filename);
                    $data->akta = $filename;
                    $data->save();
                } else {
                    // if data null ->for add new
                    $image = $request->file('akta');
                    $file_extension = $request->file('akta')->getClientOriginalExtension();
                    $filename = 'akta-' . Auth::user()->id . rand(100, 999) . '.' . $file_extension;;
                    $image->move('img/berkas/', $filename);
                    $data->akta = $filename;
                    $data->save();
                }
            } else {
                // if data null ->for add new
                $image = $request->file('akta');
                $file_extension = $request->file('akta')->getClientOriginalExtension();
                $filename = 'akta-' . Auth::user()->id . rand(100, 999) . '.' . $file_extension;;
                $image->move('img/berkas/', $filename);
                $data->akta = $filename;
                $data->save();
            }
            return redirect()->route('main');
        }
    }

    /*
    |--------------------------------------------------------------------------
    | KIP
    |--------------------------------------------------------------------------
    */
    function editkip(Request $request, $id)
    {
        $data = Ppshb::where('id_users', $id)->first();
        if ($request->has('kip')) {
            //  if data not null ->for edit
            if (isset($data->kip)) {
                $path = public_path() . "/img/berkas/" . $data->kip;
                if (file_exists($path)) {
                    $FilePath = Ppshb::select('kip')->where('id_users', $id)->first();
                    $path = public_path() . "/img/berkas/" . $FilePath->kip;
                    unlink($path);
                    $image = $request->file('kip');
                    $file_extension = $request->file('kip')->getClientOriginalExtension();
                    $filename = 'kip-' . Auth::user()->id . rand(100, 999) . '.' . $file_extension;
                    $image->move('img/berkas/', $filename);
                    $data->kip = $filename;
                    $data->save();
                } else {
                    // if data null ->for add new
                    $image = $request->file('kip');
                    $file_extension = $request->file('kip')->getClientOriginalExtension();
                    $filename = 'kip-' . Auth::user()->id . rand(100, 999) . '.' . $file_extension;;
                    $image->move('img/berkas/', $filename);
                    $data->kip = $filename;
                    $data->save();
                }
            } else {
                // if data null ->for add new
                $image = $request->file('kip');
                $file_extension = $request->file('kip')->getClientOriginalExtension();
                $filename = 'kip-' . Auth::user()->id . rand(100, 999) . '.' . $file_extension;;
                $image->move('img/berkas/', $filename);
                $data->kip = $filename;
                $data->save();
            }
            return redirect()->route('main');
        }
    }

    /*
    |--------------------------------------------------------------------------
    | SURAT KETERSEDIAAN
    |--------------------------------------------------------------------------
    */
    function editsurat_sedia(Request $request, $id)
    {
        $data = Ppshb::where('id_users', $id)->first();
        if ($request->has('surat_sedia')) {
            //  if data not null ->for edit
            if (isset($data->surat_sedia)) {
                $path = public_path() . "/img/berkas/" . $data->surat_sedia;
                if (file_exists($path)) {
                    $FilePath = Ppshb::select('surat_sedia')->where('id_users', $id)->first();
                    $path = public_path() . "/img/berkas/" . $FilePath->surat_sedia;
                    unlink($path);
                    $image = $request->file('surat_sedia');
                    $file_extension = $request->file('surat_sedia')->getClientOriginalExtension();
                    $filename = 'surat_sedia-' . Auth::user()->id . rand(100, 999) . '.' . $file_extension;
                    $image->move('img/berkas/', $filename);
                    $data->surat_sedia = $filename;
                    $data->save();
                } else {
                    // if data null ->for add new
                    $image = $request->file('surat_sedia');
                    $file_extension = $request->file('surat_sedia')->getClientOriginalExtension();
                    $filename = 'surat_sedia-' . Auth::user()->id . rand(100, 999) . '.' . $file_extension;;
                    $image->move('img/berkas/', $filename);
                    $data->surat_sedia = $filename;
                    $data->save();
                }
            } else {
                // if data null ->for add new
                $image = $request->file('surat_sedia');
                $file_extension = $request->file('surat_sedia')->getClientOriginalExtension();
                $filename = 'surat_sedia-' . Auth::user()->id . rand(100, 999) . '.' . $file_extension;;
                $image->move('img/berkas/', $filename);
                $data->surat_sedia = $filename;
                $data->save();
            }
            return redirect()->route('main');
        }
    }

    /*
    |--------------------------------------------------------------------------
    | SURAT KEABSAHAN
    |--------------------------------------------------------------------------
    */
    function editsurat_absah(Request $request, $id)
    {
        $data = Ppshb::where('id_users', $id)->first();
        if ($request->has('surat_absah')) {
            //  if data not null ->for edit
            if (isset($data->surat_absah)) {
                $path = public_path() . "/img/berkas/" . $data->surat_absah;
                if (file_exists($path)) {
                    $FilePath = Ppshb::select('surat_absah')->where('id_users', $id)->first();
                    $path = public_path() . "/img/berkas/" . $FilePath->surat_absah;
                    unlink($path);
                    $image = $request->file('surat_absah');
                    $file_extension = $request->file('surat_absah')->getClientOriginalExtension();
                    $filename = 'surat_absah-' . Auth::user()->id . rand(100, 999) . '.' . $file_extension;
                    $image->move('img/berkas/', $filename);
                    $data->surat_absah = $filename;
                    $data->save();
                } else {
                    // if data null ->for add new
                    $image = $request->file('surat_absah');
                    $file_extension = $request->file('surat_absah')->getClientOriginalExtension();
                    $filename = 'surat_absah-' . Auth::user()->id . rand(100, 999) . '.' . $file_extension;;
                    $image->move('img/berkas/', $filename);
                    $data->surat_absah = $filename;
                    $data->save();
                }
            } else {
                // if data null ->for add new
                $image = $request->file('surat_absah');
                $file_extension = $request->file('surat_absah')->getClientOriginalExtension();
                $filename = 'surat_absah-' . Auth::user()->id . rand(100, 999) . '.' . $file_extension;;
                $image->move('img/berkas/', $filename);
                $data->surat_absah = $filename;
                $data->save();
            }
            return redirect()->route('main');
        }
    }
}
