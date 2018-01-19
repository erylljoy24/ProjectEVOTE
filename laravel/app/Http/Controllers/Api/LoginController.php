<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    public function login(Request $request)
	{
	    $this->validateLogin($request);

	    if ($this->attemptLogin($request)) {
	        $user = $this->guard()->user();
	        $user->generateToken();

	        return response()->json([
	            'data' => $user->toArray(),
	        ]);
	    }

	    return $this->sendFailedLoginResponse($request);
	}
}
