<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
  public function getUser(Request $request, $account_id){
    return "test getuser";
  }
}
