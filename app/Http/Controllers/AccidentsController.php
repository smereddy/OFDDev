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

    public function edit($id)
    {
        $accident = Accident::findOrFail($id);
        return view('accidents.edit', compact('accident', ''));
    }

    public function update(UpdateAccidentsRequest $request, $id)
    {
        $request = $this->saveFiles($request);
        $accident = Accident::findOrFail($id);

//        \DB::table('accidents')->insert([
//                'station_id' => $station->id,
//                'station_name' => $station->station_name,
//                'station_number' => $station->station_number,
//                'station_date' => $station->station_date,
//                'address' => $station->address,
//                'city' => $station->city,
//                'zipcode' => $station->zipcode,
//                'district' => $station->district,
//                'vendor_id' => $station->vendor_id,
//                'vendor_name' => $vendor_name,
//                'grant_id' => $station->grant_id,
//                'grant_name' => $grant_name,
//                "created_at" =>  \Carbon\Carbon::now('America/Chicago'),
//                "updated_at" => \Carbon\Carbon::now('America/Chicago') ]
//        );

        $accident->update($request->all());
        return redirect()->route('accidents.index');

    }
}
