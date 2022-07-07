<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MataPelajaran;

class MataPelajaranController extends Controller
{
    public function matpel() {
        $matpel = MataPelajaran::latest()->paginate(5);
        return view('admin/matapelajaran', compact('matpel'));
    }

    public function edit($id) {
        
        $matpel = MataPelajaran::all()->where('kd_mapel', $id)->first();
        
        return view('admin/editmatpel', compact('matpel'));
    }

    public function updatemapel(Request $request)
    {
        // @dd($request->all());
        DB::table('mata_pelajaran')->where('kd_mapel', $request->kd_mapel)->update([
            'nama'=>$request->nama,
            'angka'=>$request->angka,
            'huruf'=>$request->huruf,
        ]);
        return redirect('matpel');
    }
}
