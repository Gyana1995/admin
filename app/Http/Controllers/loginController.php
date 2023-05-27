<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class loginController extends Controller
{
  public function  adminLogin(){
       $result = DB::table('user')->get();
       return $result;
    }
}
