<?php

namespace App\Http\Controllers;

use App\Mail\NotifikasiEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NotifikasiController extends Controller
{
    public function create()
    {
        return view('notifikasi.email.create');
    }
    public function store(Request $request)
    {           
        Mail::to($request->input('email'))->send(new NotifikasiEmail);

        return redirect()->back();
    }
}
