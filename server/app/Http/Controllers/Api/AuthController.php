<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    //
public function register(Request $request){

    $request ->validate ([
        'name' =>'required',
        'email'=> 'required|email',
        'password'=>'required'
    ]);

    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = $request->password;
    $user->save();

    return response()->json([
        'user' => $user,
        'msg' => 'usuario creado correctamente'
    ], 201);
}



}
