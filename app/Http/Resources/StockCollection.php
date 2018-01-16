<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class StockCollection extends ResourceCollection {
    public function toArray ($request) {
        return [
            'error' => false,
            'data' => $this->collection,
        ];
    }
}
