<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rapor;
use App\Models\MataPelajaran;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;

class RaporSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // @dd($request->all());
        $id = $request->nisn;
        
        // $siswa = Siswa::where('nisn','=',Auth::user()->nisn_siswa)->firstOrFail();
        $data_siswa = Siswa::where('nisn','=',$id)->firstOrFail();
        $data_nilai = Rapor::all()->where('nisn_siswa', '=' ,$id);
        $data_matpel = MataPelajaran::all();
        return view('admin/raporSiswa', compact('data_siswa', 'data_nilai', 'data_matpel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
