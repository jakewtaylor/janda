<?php

namespace App\Http\Controllers;

use App\Practice;
use App\Http\Resources\{ Practice as PracticeResource, PracticeCollection };
use App\Http\Requests\{ CreatePracticeRequest, UpdatePracticeRequest };
use Illuminate\Http\Request;

use App\Classes\ErrorResponder;

use Exception;

class PracticeController extends Controller {
    public function __construct () {
        $this->error = new ErrorResponder('practice');
    }

    // GET /practices
    public function index () {
        $practices = Practice::all();
        return PracticeCollection::make($practices);
    }

    // POST /practices
    public function store (CreatePracticeRequest $request) {
        try {
            $practice = $request->getPractice();
            $practice = Practice::create($practice);
        } catch (Exception $e) {
            return $this->error->createModelFailure($e);
        }

        return PracticeResource::make($practice);
    }

    // GET /practices/{practice}
    public function show (Practice $practice) {
        return PracticeResource::make($practice);
    }

    // PATCH /practices/{practice}
    public function update (UpdatePracticeRequest $request, Practice $practice) {
        $updates = $request->getUpdates();

        foreach ($updates as $key => $val) {
            $practice->$key = $val;
        }

        try {
            $practice->save();
        } catch (Exception $e) {
            return $this->error->updateModelFailure($e);
        }

        return PracticeResource::make($practice);
    }

    // DELETE /practices/{practice}
    public function destroy (Practice $practice) {
        try {
            $practice->delete();
        } catch (Exception $e) {
            return $this->error->deleteModelFailure($e);
        }

        return response()->json([
            'error' => false,
            'message' => 'Successfully deleted practice.',
        ]);
    }
}
