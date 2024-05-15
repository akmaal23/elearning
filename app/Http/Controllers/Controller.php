<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function index() {
        $nama = "Akmal";
        return view("profile", [
            'nama' => $nama
        ]);
    } 
}
