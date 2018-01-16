<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Manufacturer extends Resource {
    public function toArray ($request) {
        return [
            'id' => $this->id,
            'name' => $this->name,
        ];
    }

    public function with ($request) {
       return [
           'error' => false,
       ];
    }
}
