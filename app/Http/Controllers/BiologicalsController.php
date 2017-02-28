<?php

namespace App\Http\Controllers;

use App\Biological;
use Illuminate\Http\Request;

use App\Http\Controllers\Traits\FileUploadTrait;

use App\Http\Requests\StoreBiologicalsRequest;


class BiologicalsController extends Controller
{
    use FileUploadTrait;

    public function index()
    {
        return view('biologicals.index', compact('biologicals'));
    }

    public function store(StoreBiologicalsRequest $request)
    {
        $request = $this->saveFiles($request);
        Biological::create($request->all());

        return redirect()->route('biologicals.index');
    }
}