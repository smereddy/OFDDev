<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\StoreHazmatRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Auth;

class HazmatController extends Controller
{
    use FileUploadTrait;

    public function index()
    {
        return view('hazmat.index', compact('hazmat'));
    }

//    public function create()
//    {
//        $relations = [
//            'unittypes' => \App\UnitType::get()->pluck('name', 'id')->prepend('Please select', ''),
//            'grants' => \App\Grant::get()->pluck('grant_name', 'id')->prepend('Please select', ''),
//            'statuses' => \App\Status::get()->pluck('status', 'id')->prepend('Please select', ''),
//            'stations' => \App\Station::get()->pluck('station_number', 'id')->prepend('Please select', ''),
//            'vendors' => \App\Vendor::get()->pluck('vendor_name', 'id')->prepend('Please select', ''),
//            'vehicles' => \App\Vehicle::get()->pluck('van', 'id')->prepend('Please select', ''),
//        ];
//
//        return view('stations.create', $relations);
//    }
//
    public function store(StoreHazmatRequest $request)
    {
        $request = $this->saveFiles($request);


        return redirect()->route('hazmat.index');
    }
//
//    public function show($id)
//    {
//        $relations = [
//            'unittypes' => \App\UnitType::get()->pluck('name', 'id')->prepend('Please select', ''),
//            'grants' => \App\Grant::get()->pluck('grant_name', 'id')->prepend('Please select', ''),
//            'statuses' => \App\Status::get()->pluck('status', 'id')->prepend('Please select', ''),
//            'stations' => \App\Station::get()->pluck('station_number', 'id')->prepend('Please select', ''),
//            'restations' => \App\Station::get()->pluck('station_name', 'id'),
//            'vendors' => \App\Vendor::get()->pluck('vendor_name', 'id')->prepend('Please select', ''),
//            'vehicles' => \App\Vehicle::get()->pluck('van', 'id')->prepend('Please select', ''),
//
//        ];
//        $station = Station::findOrFail($id);
//
//        //show history code start
//        //below one line code is for storing all history related to the $id in variable, which is to be used to display in show page.
//
//        $stationhis2 = Stationhis::where('station_id', $id)->get();
//        //show history code end
//        return view('stations.show', compact('station', 'stationhis2') + $relations);
//    }
//
//    public function reassign(Request $request)
//    {
//        $arrayValues = $request->reassignval;
//        $newStationID = $request->station_id;
//        if ($arrayValues != null) {
//            foreach ($arrayValues as $key => $value) {
//                $allAsset = AllAsset::findOrFail($value);
//                $allAsset->station_id = $newStationID;
//                $allAsset->save();
//            }
//            $stations = Station::all();
//            return view('stations.index', compact('stations'));
//        } else
//            return Redirect::back()->withInput();
//    }
//
//    public function edit($id)
//    {
//
//        $relations = [
//            'grants' => \App\Grant::get()->pluck('grant_name', 'id')->prepend('Please select', ''),
//            'statuses' => \App\Status::get()->pluck('status', 'id')->prepend('Please select', ''),
//            'vendors' => \App\Vendor::get()->pluck('vendor_name', 'id')->prepend('Please select', ''),
//        ];
//
//        $station = Station::findOrFail($id);
//        return view('stations.edit', compact('station', '') + $relations);
//    }
//
//    public function update(UpdateStationsRequest $request, $id)
//    {
//        $request = $this->saveFiles($request);
//        $station = Station::findOrFail($id);
//
//        //history code begin
//        $grantid = $station->grant_id;
//        $vendorid = $station->vendor_id;
//
//        $grant = Grant::find($grantid);
//        $vendor = Vendor::find($vendorid);
//
//        if ($grant) {
//            $grant_name = $grant->grant_name;
//
//        } else {
//            $grant_name = null;
//        }
//
//        if ($vendor) {
//            $vendor_name = $vendor->vendor_name;
//
//        } else {
//            $vendor_name = null;
//        }
//
//
//        \DB::table('stationhis')->insert([
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
//                "created_at" => \Carbon\Carbon::now('America/Chicago'),
//                "updated_at" => \Carbon\Carbon::now('America/Chicago')]
//        );
//
//        //end history code
//        $station->update($request->all());
//
//        return redirect()->route('stations.index');
//    }
//
//    public function destroy($id)
//    {
//        $station = Station::findOrFail($id);
////history code begin
//        $grantid = $station->grant_id;
//        $vendorid = $station->vendor_id;
//
//        $grant = Grant::find($grantid);
//        $vendor = Vendor::find($vendorid);
//
//        if ($grant) {
//            $grant_name = $grant->grant_name;
//
//        } else {
//            $grant_name = null;
//        }
//
//        if ($vendor) {
//            $vendor_name = $vendor->vendor_name;
//
//        } else {
//            $vendor_name = null;
//        }
//
//
//        \DB::table('stationhis')->insert(
//            ['station_id' => $station->id, 'station_name' => $station->station_name, 'station_number' => $station->station_number, 'station_date' => $station->station_date, 'address' => $station->address, 'city' => $station->city, 'zipcode' => $station->zipcode, 'district' => $station->district, 'vendor_id' => $station->vendor_id, 'vendor_name' => $vendor_name, 'grant_id' => $station->grant_id, 'grant_name' => $grant_name, "created_at" => \Carbon\Carbon::now('America/Chicago'), "updated_at" => \Carbon\Carbon::now('America/Chicago')]
//        );
//
//        //end history code
//
//
//        $station->delete();
//
//        return redirect()->route('stations.index');
//    }

}