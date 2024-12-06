<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function home() {
        return view('homeP13');
    }
    public function about() {
        return view('aboutP13');
    }
    public function contact() {
        return view('contactP13');
    }
}
