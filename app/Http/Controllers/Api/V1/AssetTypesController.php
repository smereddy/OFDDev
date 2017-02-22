<?php

namespace App\Http\Controllers\Api\V1;

use App\AssetType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAssetTypesRequest;
use App\Http\Requests\UpdateAssetTypesRequest;

class AssetTypesController extends Controller
{
    public function index()
    {
        return AssetType::all();
    }

    public function show($id)
    {
        return AssetType::findOrFail($id);
    }

    public function update(UpdateAssetTypesRequest $request, $id)
    {
        $assettype = AssetType::findOrFail($id);
        $assettype->update($request->all());

        return $assettype;
    }

    public function store(StoreAssetTypesRequest $request)
    {
        $assettype = AssetType::create($request->all());

        return $assettype;
    }

    public function destroy($id)
    {
        $assettype = AssetType::findOrFail($id);
        $assettype->delete();
        return '';
    }
}
