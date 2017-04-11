<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\User;

class AuthenticateController extends Controller
{
  public function authenticate(Request $request){
    $credentials = $request->only('email', 'password');

    try{
      if(! $token = JWTAuth::attempt($credentials)){
        return response()->json(['error' => 'invalid_credentials'],401);
      }
    }catch(JWTException $e){
      return response()->json(['error' => 'could_not_create_token'],500);
    }

    $user = User::where('email', $request->email)->first();

    return response()->json(compact('user','token'));
  }

  public function signup(Request $request){
    $user = User::create(['name' => $request->account_id,
                          'account_id' => $request->account_id,
                          'email' => $request->email,
                          'password' => bcrypt($request->password)]);
    $token = JWTAuth::fromUser($user);
    return response()->json(compact('user','token'));
  }

  public function getCurrentUser(){
    $user = JWTAuth::parseToken()->authenticate();
    return response()->json(compact('user'));
  }

  public function logout(){}
}
