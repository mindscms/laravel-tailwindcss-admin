<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('backend.index');
    }

    public function maps()
    {
        return view('backend.maps');
    }

    public function settings()
    {
        return view('backend.settings');
    }

    public function tables()
    {
        return view('backend.tables');
    }

}
