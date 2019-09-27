<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
//use Illuminate\Foundation\Auth\Register as Authenticatable;


class Register extends Authenticatable implements MustVerifyEmail
{


	protected $table="register_users"; 


    public static function fromstore($data){
    	// echo "here model";
    	// var_dump($data);
    	$username=Input::get('username');
    	//echo "$username";
    	$email=Input::get('email');
            

      //$image=Input::get('image')
    	//echo "$email";
    	$password=Hash::make(Input::get('password'));
    	//echo "$password";
        $users=new Register();
         
         $users->name=$username;
         $users->email=$email;
         $users->password=$password;
         

         if($users->save())
         {
          echo "passed";
         }
         else
         {
          echo "failed";
         }


            }
}
