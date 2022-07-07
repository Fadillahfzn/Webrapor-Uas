<?php

namespace App\Http\Controllers;

use App\Models\MataPelajaran;
use App\Models\Siswa;
use App\Models\Rapor;
use Illuminate\Http\Request;

class TambahRaporController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data_siswa = Siswa::all();
        $matpel = MataPelajaran::all();
        return view('admin/tambahRapor', compact('data_siswa', 'matpel'));
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
        // @dd($request->all());
        $rapor = new Rapor();

        // $data_rapor = Rapor::where([['nisn_siswa', $request->nisn], ['kode_matpel', $request->kode_matpel],])->first();
        
        $rapor->nisn_siswa = $request->nisn;
        $rapor->kode_matpel = $request->kode_matpel;
        $rapor->nilai = $request->nilai;
        $rapor->ket = $request->ket;
        $rapor->predikat = $request->predikat;
        
        
        $rapor->save();
        return back();

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
