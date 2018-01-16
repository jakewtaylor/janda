<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class CreateBrandStockRequest extends FormRequest {
    public function authorize () {
        return Auth::check();
    }

    public function rules () {
        return [
            'manufacturer_id' => 'required|string|exists:manufacturers,id',
            'model' => 'required|string',
            'eyesize' => 'required|number',
            'dbl' => 'required|number',
            'colour' => 'required|string',
            'price' => 'required|numer',
            'year' => 'required|string',
            'code' => 'required|string',
            'checked' => 'required|boolean',
        ];
    }
}
