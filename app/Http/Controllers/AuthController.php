<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;

use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller {
    public function login (LoginRequest $request) {
        $credentials = $request->getCredentials();

        try {
            $token = JWTAuth::attempt($credentials);
            if (!$token) {
                return response()->json([
                    'success' => false,
                    'error' => 'Invalid Credentials.',
                ]);
            }
        } catch (JWTException $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
            ]);
        }

        return response()->json([
            'success' => true,
            'token' => $token,
        ]);
    }
}
