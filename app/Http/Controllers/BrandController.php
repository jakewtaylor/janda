<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Http\Resources\{ Brand as BrandResource, BrandCollection };
use App\Http\Requests\{ CreateBrandRequest, UpdateBrandRequest };
use Illuminate\Http\Request;

use App\Classes\ErrorResponder;

use Exception;

class BrandController extends Controller {
    public function __construct () {
        $this->error = new ErrorResponder('brand');
    }

    // GET /brands
    public function index () {
        $brands = Brand::all();
        return BrandCollection::make($brands);
    }

    // POST /brands
    public function store (CreateBrandRequest $request) {
        try {
            $brand = $request->getBrand();
            $brand = Brand::create($brand);
        } catch (Exception $e) {
            return $this->error->createModelFailure($e);
        }

        return BrandResource::make($brand);
    }

    // GET /brands/{brand}
    public function show (Brand $brand) {
        return BrandResource::make($brand);
    }

    // PATCH /brands/{brand}
    public function update (UpdateBrandRequest $request, Brand $brand) {
        $updates = $request->getUpdates();

        foreach ($updates as $key => $val) {
            $brand->$key = $val;
        }

        try {
            $brand->save();
        } catch (Exception $e) {
            return $this->error->updateModelFailure($e);
        }

        return BrandResource::make($brand);
    }

    // DELETE /brands/{brand}
    public function destroy (Brand $brand) {
        try {
            $brand->delete();
        } catch (Exception $e) {
            return $this->error->deleteModelFailure($e);
        }

        return response()->json([
            'error' => false,
            'message' => 'Successfully deleted brand.',
        ]);
    }
}
