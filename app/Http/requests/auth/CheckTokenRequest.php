<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class CheckTokenRequest extends FormRequest {
    public function authorize () {
        return true;
    }

    public function rules () {
        return [
            'jwt' => 'required|string',
        ];
    }

    public function getJwt () {
        return $this->input('jwt');
    }
}
