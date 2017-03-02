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

    public function edit($id)
    {
        $biological = Biological::findOrFail($id);
        return view('biologicals.edit', compact('biological', ''));
    }

    public function update(UpdateBiologicalsRequest $request, $id)
    {
        $request = $this->saveFiles($request);
        $biological = Biological::findOrFail($id);
    }

    public function show($id)
    {
        $biological = Biological::findOrFail($id);
        return view('biologicals.show', compact('biological', ''));
    }
}