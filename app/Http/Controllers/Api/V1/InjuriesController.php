<?php

namespace App\Http\Controllers\Api\V1;

use App\Station;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStationsRequest;
use App\Http\Requests\UpdateStationsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class InjuriesController extends Controller
{
    use FileUploadTrait;

//    public function index()
//    {
//        return Station::all();
//    }

//    public function show($id)
//    {
//        return Station::findOrFail($id);
//    }
//
//    public function update(UpdateStationsRequest $request, $id)
//    {
//        $request = $this->saveFiles($request->all());
//        $station = Station::findOrFail($id);
//        $station->update($request->all());
//
//        return $station;
//    }
//
    public function store(StoreStationsRequest $request)
    {
        $request = $this->saveFiles($request->all());

    }
//
//    public function destroy($id)
//    {
//        $station = Station::findOrFail($id);
//        $station->delete();
//        return '';
//    }
}
