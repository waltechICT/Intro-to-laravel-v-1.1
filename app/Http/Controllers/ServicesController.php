<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    // function to show the services page
    public function index()
    {
        return view('services');
    }
}
