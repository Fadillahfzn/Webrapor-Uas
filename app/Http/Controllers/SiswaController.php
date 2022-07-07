<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index() {
        
        $siswa = Siswa::all();
        $user = User::all();
        return view('admin.siswa', compact('siswa', 'user'));
    }

    public function edit($id)
    {
        $siswa = Siswa::all()->where('nisn', $id)->first();
        $user = User::all()->where('nisn_siswa', $id)->first();
        $data = [
            'user'=>$user,
            'siswa'=> $siswa,
        ];
        return view('admin.editsiswa', $data);
    }

    public function updatesiswa(Request $request) {
        $password = $request->password;
        if (!$password) {
            DB::table('siswa')->where('nisn', $request->nisn)->update([
                'nama'=>$request->nama,
                'alamat'=>$request->alamat,
            ]);
        } else {
            DB::table('siswa')->where('nisn', $request->nisn)->update([
                'nama'=>$request->nama,
                'alamat'=>$request->alamat,

            ]);

            DB::table("users")->where("nisn_siswa",$request->nisn)->update([
                'password'  =>  bcrypt($request->password)
            ]);
        }
        return redirect('siswa')->with("status","Data Berhasil Diupdate");
    }
}
