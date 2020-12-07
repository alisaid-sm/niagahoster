<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PriceController extends Controller
{
    public function index()
    {
        $bayi = DB::table('price')->where('id', 1)->get();
        $pelajar = DB::table('price')->where('id', 2)->get();
        $personal = DB::table('price')->where('id', 3)->get();
        $bisnis = DB::table('price')->where('id', 4)->get();

        return view('home', array(
            'bayi' => $bayi,
            'pelajar' => $pelajar,
            'personal' => $personal,
            'bisnis' => $bisnis
        ));
    }
}
