<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Validation\Rule;

class UpdatePracticeRequest extends FormRequest {
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
            'name' => [
                'required',
                'string',
                Rule::unique('practices')->ignore($this->route('practice')->id),
            ],
            'phone' => 'required|string',
            'address.line1' => 'required|string',
            'address.line2' => 'nullable|string',
            'address.city' => 'required|string',
            'address.county' => 'required|string',
            'address.postcode' => 'required|string',
        ];
    }

    public function getUpdates () {
        return [
            'name' => $this->input('name'),
            'phone' => $this->input('phone'),
            'line1' => $this->input('address.line1'),
            'line2' => $this->input('address.line2'),
            'city' => $this->input('address.city'),
            'county' => $this->input('address.county'),
            'postcode' => $this->input('address.postcode'),
        ];
    }
}
