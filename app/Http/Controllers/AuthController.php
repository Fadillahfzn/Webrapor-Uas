<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Siswa;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function index() {

        if ($user = Auth::user()) {
            return redirect()->intended('dashboard');
        }

        return view('login');
    }

    public function proses_login(Request $request) {
        // dd($request->all());
        $ceklogin = $request->only('username', 'password');
        // @dd($ceklogin);
        // @dd(Auth::attempt($ceklogin));
        if (Auth::attempt($ceklogin)) {
            $session = User::all()->where('username', $request->username)->first();
            $siswa = Siswa::all()->where('nisn', 1)->first();

            $request->session()->regenerate();
            session([
                'nama' => $session->username,
                'id' => $session->id,
                'role_user' => $session->role_id,
            ]);

            if ($session->role_id == 1) {
                return redirect()->intended('dashboard');
            } else {
                return redirect()->intended('dashboardUser');
            }
        }

        return redirect('login')->with('flash_message_error', 'Username ata Password Anda Salah!');
    }

    public function logout(Request $request) {
        $request->session()->flush();
        Auth::logout();
        return redirect('login');
    }

    public function username() {
        return 'username';
    }

}
