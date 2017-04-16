<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
  public function getUser(Request $request, $account_id){
    $user = User::where("account_id",$account_id)->first();
    return $user;
  }

  public function getAllUsers(Request $request){
    $users = User::all();
    return $users;
  }

  public function editUser(Request $request, $account_id){
    $path = $request->image->store('images');
    $url = Storage::url($path);
    return $url;
    $user = User::where("account_id",$account_id)->first();
    return $user;
  }
}
