<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;

class HomeController extends Controller
{
    public function home() {
        // $packages = Package::all();
        // dd($packages);
        return view('home');
    }
}
