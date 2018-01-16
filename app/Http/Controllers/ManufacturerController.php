<?php

namespace App\Http\Controllers;

use App\Manufacturer;
use App\Http\Resources\{ Manufacturer as ManufacturerResource, ManufacturerCollection };
use App\Http\Requests\{ CreateManufacturerRequest, UpdateManufacturerRequest };
use Illuminate\Http\Request;

use App\Classes\ErrorResponder;

use Exception;

class ManufacturerController extends Controller {
    public function __construct () {
        $this->error = new ErrorResponder('manufacturer');
    }

    // GET /manufacturers
    public function index () {
        $manufacturers = Manufacturer::all();
        return ManufacturerCollection::make($manufacturers);
    }

    // POST /manufacturers
    public function store (CreateManufacturerRequest $request) {
        try {
            $manufacturer = $request->getManufacturer();
            $manufacturer = Manufacturer::create($manufacturer);
        } catch (Exception $e) {
            return $this->error->createModelFailure($e);
        }

        return ManufacturerResource::make($manufacturer);
    }

    // GET /manufacturers/{manufacturer}
    public function show (Manufacturer $manufacturer) {
        return ManufacturerResource::make($manufacturer);
    }

    // PATCH /manufacturers/{manufacturer}
    public function update (UpdateManufacturerRequest $request, Manufacturer $manufacturer) {
        $updates = $request->getUpdates();

        foreach ($updates as $key => $val) {
            $manufacturer->$key = $val;
        }

        try {
            $manufacturer->save();
        } catch (Exception $e) {
            return $this->error->updateModelFailure($e);
        }

        return ManufacturerResource::make($manufacturer);
    }

    // DELETE /manufacturers/{manufacturer}
    public function destroy (Manufacturer $manufacturer) {
        try {
            $manufacturer->delete();
        } catch (Exception $e) {
            return $this->error->deleteModelFailure($e);
        }

        return response()->json([
            'error' => false,
            'message' => 'Successfully deleted manufacturer.',
        ]);
    }
}
