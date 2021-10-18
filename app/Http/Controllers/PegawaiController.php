<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use PDF;

class PegawaiController extends Controller
{
    
    public function index()
    {
        $pegawai = Pegawai::all();
    	return view('pegawai.index',['pegawai'=>$pegawai]);
    }

    public function cetak_pdf(Pegawai $id)
    {
    	// $pegawai = Pegawai::all();
        $pegawai = Pegawai::find($id);
        $pdf= PDF::loadView('pegawai/pegawai_pdf', ['pegawai' => $id]);
    	return $pdf->download('laporan-pegawai.pdf');
    }
    
    public function create()
    {
        return view('pegawai.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
    		'nama' => 'required',
    		'email' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'pekerjaan' => 'required'
    	]);
 
        Pegawai::create([
    		'nama' => $request->nama,
    		'email' => $request->email,
            'alamat' => $request->alamat,
            'telepon' => $request->email,
            'pekerjaan' => $request->pekerjaan
    	]);
 
    	return redirect('/pegawai');
    }

    public function show($id)
    {
        $pegawai = Pegawai::find($id);
        return view('pegawai.show', compact('pegawai'));
    }

 
    public function edit($id)
    {
        $pegawai = Pegawai::find($id);
        return view('pegawai.edit', compact('pegawai'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'pekerjaan' => 'required',
        ]);

        $pegawai = Pegawai::find($id);
        $pegawai->nama = $request->nama;
        $pegawai->email = $request->email;
        $pegawai->alamat = $request->alamat;
        $pegawai->telepon = $request->telepon;
        $pegawai->pekerjaan = $request->pekerjaan;
        $pegawai->update();
        return redirect('/pegawai');
    }

    public function destroy($id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->delete();
        return redirect('/pegawai');
    }
}