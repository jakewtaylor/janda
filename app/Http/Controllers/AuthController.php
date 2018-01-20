<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\{ LoginRequest, CheckTokenRequest };

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

    public function checkToken (CheckTokenRequest $request) {
        $jwt = $request->getJwt();

        try {
            JWTAuth::setToken($jwt)->authenticate();
        } catch (\Exception $e) {
            return response()->json([
                'valid' => false,
                'exception' => $e->getMessage(),
            ]);
        }

        $freshToken = JWTAuth::refresh(JWTAuth::getToken());

        return response()->json([
            'valid' => true,
            'freshToken' => $freshToken,
        ]);
    }
}
