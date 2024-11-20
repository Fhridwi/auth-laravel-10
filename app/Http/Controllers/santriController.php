<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class santriController extends Controller
{
    public function index() {
        return view('santri.data_santri');
    }
}
