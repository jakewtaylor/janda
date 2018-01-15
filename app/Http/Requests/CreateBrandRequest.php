<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Http\FormRequest;

class CreateBrandRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize () {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules () {
        return [
            'name' => 'required|string|unique:brands',
        ];
    }

    public function getBrand () {
        return [
            'name' => $this->input('name'),
        ];
    }
}
