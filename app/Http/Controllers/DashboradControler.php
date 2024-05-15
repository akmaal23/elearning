<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboradControler extends Controller
{
    public function index()
    {
        return view("admin.content.dashboard.index");
    }
    //
}
