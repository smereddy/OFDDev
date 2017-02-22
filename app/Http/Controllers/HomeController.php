<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $todos = Todo::all();
//        $stations = Station::count();
//        $vehicles = Vehicle::count();
//        $total_assets = AllAsset::count();
//
//        $assets_available = AllAsset::join('statuses', 'status_id', '=', 'statuses.id' )
//            ->select('all_assets.*')
//            ->where('status', '=', 'available')
//            ->get();
//        $available = count($assets_available);
//
//        $assets_repairs = AllAsset::join('statuses', 'status_id', '=', 'statuses.id' )
//            ->select('all_assets.*')
//            ->where('status', '=', 'in-repair')
//            ->get();
//
//        $vehicles_repairs = Vehicle::join('statuses', 'status_id', '=', 'statuses.id' )
//            ->select('vehicles.*')
//            ->where('status', '=', 'in-repair')
//            ->get();
//
//        $in_repairs = $assets_repairs ->merge($vehicles_repairs);
//        $repairs = count($in_repairs);

        return view('home');
    }

}
