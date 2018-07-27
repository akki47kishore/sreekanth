<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class StudInsertController extends Controller {
   public function insertform(){
      return view('stud_create');
   }
	
   public function insert(Request $request){
      $email = $request->input('email');
      $password = $request->input('password');
      $user = DB::table('logins')->where('email', $email)->value('password');
      if($user==$password)
      {
         echo "Login succesful";
      }
      else
      {
         echo "invalid password";
      }
     /*echo '<a href = "/insert">Click Here</a> to go back.';*/
   }
}