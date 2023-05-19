<?php

namespace App\Http\Controllers\Api\Auth;

use App\Actions\Fortify\CreateNewUser;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

class UserContoller extends Controller
{

    public function login(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required|string|max:255',
        ]);

        if (!auth()->attempt($request->only('email', 'password')))
            return response()->json([
                'message' => 'Invalid login details'
            ], 401);

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    public function signup(Request $request)
    {
        return app(CreateNewUser::class)->create($request->all());
    }
}

