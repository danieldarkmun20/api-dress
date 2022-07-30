<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResoruce;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        // return $name;
        $users = User::orderBy('id', 'DESC')->name($name)->email($email)->get();
        return UserResoruce::collection($users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $request['password'] = bcrypt($request->password);
        $user = User::create($request->all());

        return response()->json([
            'message' => 'Usuario registrado existosamente!',
            'user' => $user
        ], 201);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function get($id)
    {
        $user = User::where('id', $id)->first();
        if (isset($user->id)) {
            return new UserResoruce($user);
        }
        return response()->json([
            'message' => 'El usuario no esta registrado!',
        ], 404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request)
    {
        $user = User::find($request->id);
        if (isset($user->id)) {
            $request['password'] = isset($request['password']) ? bcrypt($request['password']) : $user->password;
            $user->update($request->all());
            return response()->json([
                'message' => 'Usuario Actualizado existosamente!',
                'user' => $user
            ], 201);
        }
        return response()->json([
            'message' => 'El usuario no esta registrado!',
        ], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if (isset($user->id)) {
            $user->delete();
            return response()->json([
                'message' => 'Usuario Eliminado existosamente!',
            ], 201);
        }
        return response()->json([
            'message' => 'El usuario no esta registrado!',
        ], 404);
    }
}
