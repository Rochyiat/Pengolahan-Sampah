<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function create()
    {
        return view('jadwal.create');
    }
}
