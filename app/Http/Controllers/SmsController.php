<?php

namespace App\Http\Controllers;

use App\Sms;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function create()
    {
        return view('notifikasi.sms.create');
    }
    public function store(Request $request)
    {
        $smss = Sms::create([

            'number' => $request->number,

        ]);
        Nexmo::message()->send([
            'to'    =>  $request->number,
            'from'  =>  'firman',
            'text'  =>  'Pubg Ga ki'
        ]);

        return redirect()->back();
    }
}