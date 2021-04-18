<?php

namespace App\Http\Controllers;

use App\Pelamar;
use Illuminate\Http\Request;

class PelamarController extends Controller
{
    public function index()
    {
        $pelamars = Pelamar::all();
        return view('backend.pelamar.index', compact('pelamars'));   
    }

    public function create()
    {
        return view('backend.pelamar.create');
    }
    public function edit($id)
    {
        $pelamars = Pelamar::findOrFail($id);
        return view('backend.pelamar.edit', compact('pelamars'));
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'kode'  => 'required',
            'telp'  => 'required',
            'nama'  => 'required',
            'umur'  => 'required',
            'pendi'  => 'required',
            'almt'  => 'required',
            'jk'  => 'required',

        ]);

        $pelamars = Pelamar::create([
            'kode' =>  $request->kode,
            'telpon' => $request->telp,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'pendidikan' => $request->pendi,
            'alamat' => $request->almt,
            'jenis_kelamin' => $request->jk,
            
        ]);

        $pelamars->save();
        return redirect()->back();
        }
        public function update(Request $request, $id)
        {
            $pelamars = Pelamar::find($id);   

            $pelamars->update($request->all());

            return redirect()->back();
        }
        public function destroy($id)
        {
            $pelamars = Pelamar::find($id);
    
            $pelamars -> delete($pelamars->all());
    
            return redirect()->back();
        }
        public function show($id)
    {
        $pelamars = Pelamar::find($id);
        return view('backend.pelamar.show', compact('pelamars'));
    }
}