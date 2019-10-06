<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JayController extends Controller
{
    public function dance(){
        return view('index');
    }
}
