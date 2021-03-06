<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PracticeCollection extends ResourceCollection {
    public function toArray ($request) {
        return [
            'error' => false,
            'data' => $this->collection,
        ];
    }
}
