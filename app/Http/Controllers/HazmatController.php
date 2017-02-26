<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HazmatController extends Controller
{
    public function index()
    {
        return view('hazmat.index', compact('hazmat'));
    }

}
