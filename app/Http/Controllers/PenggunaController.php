<?php

namespace App\Http\Controllers;

use App\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {
        $penggunas = Pengguna::all();
        return view('backend.pengguna.index',compact('penggunas'));
    }
    public function create()
    {
        return view('backend.pengguna.create');
    }
    public function edit($id)
    {
        $penggunas = Pengguna::findOrFail($id);
        return view('backend.pengguna.edit', compact('penggunas'));
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'gawai'  => 'required',
            'telp'  => 'required',
            'nama'  => 'required',
            'panggilan'  => 'required',
            'bagian'  => 'required',
            'alamat'  => 'required',
            'jenis_kelamin'  => 'required',
            'tgl_tambah'  => 'required',

        ]);

        $penggunas = Pengguna::create([
            'pegawai' =>  $request->gawai,
            'telp' => $request->telp,
            'nama' => $request->nama,
            'panggilan' => $request->panggilan,
            'bagian' => $request->bagian,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tgl_tambah' => $request->tgl_tambah,
            
        ]);

    
        $penggunas->save();
        return redirect()->back();
        }
    
        public function update(Request $request, $id)
        {
            $penggunas = Pengguna::find($id);   

            $penggunas->update($request->all());

            return redirect()->back();
        }

        public function destroy($id)
        {
            $penggunas = Pengguna::find($id);
    
            $penggunas -> delete($penggunas->all());
    
            return redirect()->back();
        }
            public function show($id)
    {
        $penggunas = Pengguna::find($id);
        return view('backend.pengguna.show', compact('penggunas'));
    }
    
}