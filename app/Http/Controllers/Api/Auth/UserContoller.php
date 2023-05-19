<?php

namespace App\Http\Controllers\Api\Auth;

use App\Actions\Fortify\CreateNewUser;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

/**
 * @group Authentication
 *
 * APIs for managing users
 */

class UserContoller extends Controller
{
    /**
     * Login User
     *
     * @response {   "access_token": "6|fX4WNx2KQ7c978TisJaDGvZ4iQm351SO5....",     "token_type": "Bearer"  }
     * @response  status=401 {    "message": "Invalid login details"  }
     */
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

    /**
     * Create a user.
     * @bodyParam name string required The name of the user. Example: John Doe
     * @bodyParam email string required The email address of the user. Example: john.doe@example.com
     * @bodyParam password string required The password for the user.
     * @bodyParam password_confirmation string required Confirm Password.
     *
     * @response  { "name": "John Doe", "email": "john.doe@example.com", "updated_at": "2023-05-19T07:49:33.000000Z", "created_at": "2023-05-19T07:49:33.000000Z", "id": 3, "profile_photo_url": "https://ui-avatars.com/api/?name=J+D&color=7F9CF5&background=EBF4FF" }
     */

    public function signup(Request $request)
    {
        return app(CreateNewUser::class)->create($request->all());
    }
}
