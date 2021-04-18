<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekurtController extends Controller
{
    public function index()
    {
        return view('backend.home.index');
    }

    public function create()
    {
        return view('backend.pengguna.create');
    }
}
