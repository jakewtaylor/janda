<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Practice extends Resource {
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray ($request) {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'phone' => $this->phone,
            'address' => [
                'line1' => $this->line1,
                'line2' => $this->line2,
                'city' => $this->city,
                'county' => $this->county,
                'postcode' => $this->postcode,
            ],
        ];
    }

    public function with ($request) {
        return [
            'error' => false,
        ];
    }
}
