<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function utama()
    {
        $artist = DB::table('artist')->limit(6)->get();

        return view('pages.main', ['artist' => $artist]);
    }

    public function detail($id)
    {
        $artist = DB::table('artist')->where('id', $id)->get();
        // passing data artist yang didapat ke view edit.blade.php
        return view('pages.detail', ['artist' => $artist]);
    }

}
