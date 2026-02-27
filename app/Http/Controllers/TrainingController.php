<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainingController extends Controller
{
    // function to show the training page
    public function index()
    {
        return view('training');
    }
}
