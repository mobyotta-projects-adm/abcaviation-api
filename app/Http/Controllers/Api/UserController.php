<?php

namespace App\Http\Controllers\Api;

use App\Actions\Fortify\CreateNewUser;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * @group User Endpoint
 *
 * APIs for users
 */

class UserController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     //
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create(Request $request)
    // {
    //     //
    // }

    /**
     * Creates a new user account in the system
     * @bodyParam name string required The name of the user. Example: John Doe
     * @bodyParam email string required The email address of the user. Example: john.doe@example.com
     * @bodyParam password string required The password for the user.
     * @bodyParam password_confirmation string required Confirm Password.
     *
     * @response  { "name": "John Doe", "email": "john.doe@example.com", "updated_at": "2023-05-19T07:49:33.000000Z", "created_at": "2023-05-19T07:49:33.000000Z", "id": 3, "profile_photo_url": "https://ui-avatars.com/api/?name=J+D&color=7F9CF5&background=EBF4FF" , "token": "......."}
     */
    public function store(Request $request)
    {
        return app(CreateNewUser::class)->create($request->all());
    }

    /**
     * Retrieves user account data for a specific user
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return User::find($id);
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Updates an existing user account in the system
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @bodyParam name string required The name of the user. Example: John Doe
     * @bodyParam email string required The email address of the user. Example: john.doe@example.com
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,$this->id,id'],
        ]);
        $user = User::find($id);
        return $user;
        if ($user)
            return $user->update(
                $request->only('name', 'email')
            );
    }

    /**
     * Deletes a user account from the system
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if ($user) $user->delete();
    }
}
