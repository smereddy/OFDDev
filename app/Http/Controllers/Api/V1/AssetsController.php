<?php

namespace App\Http\Controllers\Api\V1;

use App\Asset;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAssetsRequest;
use App\Http\Requests\UpdateAssetsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class AssetsController extends Controller
{
    use FileUploadTrait;

    public function index()
    {
        return Asset::all();
    }

    public function show($id)
    {
        return Asset::findOrFail($id);
    }

    public function update(UpdateAssetsRequest $request, $id)
    {
        $request = $this->saveFiles($request->all());
        $asset = Asset::findOrFail($id);
        $asset->update($request->all());

        return $asset;
    }

    public function store(StoreAssetsRequest $request)
    {
        $request = $this->saveFiles($request->all());
        $asset = Asset::create($request->all());

        return $asset;
    }

    public function destroy($id)
    {
        $asset = Asset::findOrFail($id);
        $asset->delete();
        return '';
    }
}
