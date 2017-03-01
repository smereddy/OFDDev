<?php

namespace App\Http\Controllers;

use App\Accident;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAccidentsRequest;

class AccidentsController extends Controller
{
    public function index()
    {
        return view('accidents.index', compact('accidents'));
    }

    public function store(StoreAccidentsRequest $request)
    {
        //$accident = $this->saveFiles($request);
        Accident::create($request->all());

        return redirect()->route('accidents.index');
    }
}
