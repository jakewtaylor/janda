<?php

namespace App\Http\Resources;

use App\Http\Resources\{ Brand, Manufacturer };

use Illuminate\Http\Resources\Json\Resource;

class Stock extends Resource {
    public function toArray ($request) {
        return [
            'id' => $this->id,
            'model' => $this->model,
            'eyesize' => $this->eyesize,
            'dbl' => $this->dbl,
            'colour' => $this->colour,
            'price' => $this->price,
            'year' => $this->year,
            'code' => $this->code,
            'checked' => $this->checked,
            'brand' => Brand::make($this->brand),
            'manufacturer' => Manufacturer::make($this->manufacturer),
        ];
    }

    public function with ($request) {
        return [
            'error' => false,
        ];
    }
}
