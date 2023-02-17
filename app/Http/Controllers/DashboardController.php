<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function admin()
    {
        return view('dashboard.admin');
    }

    public function kasir()
    {
        return view('dashboard.kasir');
    }

    public function owner()
    {
        return view('dashboard.owner');
    }
}