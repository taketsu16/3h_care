<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function show()
    {
        return view('home.show');
    }

    public function staff()
    {
        return view('home.staff');
    }

    public function access()
    {
        return view('home.access');
    }

    public function recruit()
    {
        return view('home.recruit');
    }
}
