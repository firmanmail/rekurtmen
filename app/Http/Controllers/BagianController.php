<?php

namespace App\Http\Controllers;

use App\Bagian;
use Illuminate\Http\Request;

class BagianController extends Controller
{
    public function index()
    {
        $bagians = Bagian::all();
        return view('backend.bagian.index',compact('bagians'));
    }
    public function create()        
    {
        return view('backend.bagian.create');
    }
    public function edit($id)
    {
        $bagians = Bagian::findOrFail($id);
        return view('backend.bagian.edit', compact('bagians'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'kode'  => 'required',
            'kepala'  => 'required',
            'depart'  => 'required',
            'lok'  => 'required',

        ]);

        $bagians = Bagian::create([
            'kode' =>  $request->kode,
            'kepala' => $request->kepala,
            'depart' => $request->depart,
            'lok' => $request->lok,
            
        ]);

        $bagians->save();
        return redirect()->back();
    }
    public function update(Request $request, $id)
        {
            $bagians = Bagian::find($id);   

            $bagians->update($request->all());

            return redirect()->back();
        }

        public function destroy($id)
        {
            $bagians = Bagian::find($id);
    
            $bagians -> delete($bagians->all());
    
            return redirect()->back();
        }
        public function show($id)
        {
            $bagians = Bagian::find($id);
            return view('backend.bagian.show', compact('bagians'));
        }
}