<?php

namespace App\Http\Resources;

use App\Http\Resources\Brand\Resource;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ManufacturerCollection extends ResourceCollection {
    public function toArray ($request) {
        return [
            'error' => false,
            'data' => $this->collection,
        ];
    }
}
