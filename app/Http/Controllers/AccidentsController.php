<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccidentsController extends Controller
{
    public function index()
    {
        return view('accidents.index', compact('accidents'));
    }

}
