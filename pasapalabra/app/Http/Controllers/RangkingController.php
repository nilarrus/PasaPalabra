<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RangkingController extends Controller
{
    public function index()
    {
        return view('windows.rank');
    }
}
