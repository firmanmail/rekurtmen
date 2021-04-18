<?php

namespace App\Http\Controllers;

use App\Penerima;
use Illuminate\Http\Request;

class PenerimaController extends Controller
{
    public function index()
    {
        $penerimas = Penerima::all();
        return view('backend.penerima.index', compact('penerimas'));
    }
    public function create()
    {
        return view('backend.penerima.create');
    }
    public function edit($id)
    {
        $penerimas = Penerima::findOrFail($id);
        return view('backend.penerima.edit', compact('penerimas'));
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'penerima'  => 'required',
            'test'  => 'required',
            'nama'  => 'required',
            'nil'  => 'required',
            'stts'  => 'required',
        ]);

        $penerimas = Penerima::create([
            'no_penerima' =>  $request->penerima,
            'nomor_test' => $request->test,
            'nama' => $request->nama,
            'nilai' => $request->nil,
            'status' => $request->stts,
            
        ]);

        $penerimas->save();
        return redirect()->back();
        }
        public function update(Request $request, $id)
        {
            $penerimas = Penerima::find($id);   

            $penerimas->update($request->all());

            return redirect()->back();
        }
        public function destroy($id)
        {
            $penerimas = Penerima::find($id);
    
            $penerimas -> delete($penerimas->all());
    
            return redirect()->back();
        }
        public function show($id)
    {
        $penerimas = Penerima::find($id);
        return view('backend.penerima.show', compact('penerimas'));
    }
}
