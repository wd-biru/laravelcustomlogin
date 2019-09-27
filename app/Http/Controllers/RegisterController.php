<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Register;
use Auth;

//use Redirect;
class RegisterController extends Controller
{
    public function store(){
    	$data=Input::except(array('_token'));
    	//var_dump($data);

    	$rule=array(

    		'username' => 'required',
        'email' => 'required|string|email|max:255|unique:register_users',
    		'password' => 'required|min:6',
    		'cpassword' => 'required|same:password',
        'remember' => 'required'


    	);

    	$message=array(
      'cpassword.required'=> 'The Confirm Password is required',
      'cpassword.min' => 'The Confirm Password at least 6 digit ',
      'cpassword.same' => 'The Confirm Password Must be same '
    	);
    	$validator=Validator::make($data,$rule,$message);
    	if($validator-> fails())
    	   {
    		return Redirect::to('register')->withErrors($validator);

    	     }
    	else
    	     {
    		   Register::fromstore(Input::except(array('_token','cpassword')));
               return Redirect::to ('register')->with('success',"Your Data insert successfully");
    	    }

    }

    public function login(){
       //echo "login function";
       //die();
        $data=Input::except(array('_token'));
        
        $rule=array(

            'email' => 'required|email',
            'password' => 'required',
            'remember' => 'required'

        );
       
        $validator=Validator::make($data,$rule);
        if($validator-> fails())
           {
            return Redirect::to('signin')->withErrors($validator);

             }
        else
             {
               $userdata=array('email'=>Input::get('email'),
                'password'=>Input::get('password'));
               //var_dump($data);
               if(Auth::attempt($userdata)){

              $profiless=Register::get()->toArray();
                return view('home',['profiless'=>$profiless]);

                //echo "yes";
               }
               else{
                return Redirect::to('signin');
                //echo "not";
               }
            }

    }


    public function edituser($id){
         $userdata=Register::where('id',$id)->first();
         return view('edituser',['userdata'=>$userdata]);
    }
public function updateuser(Request $request){
  $data=$request->all();
  Register::where('id',$data['user_id'])->update(['name'=> $data['name'],
                                                  'email' => $data['email'],
                                                  'number'=> $data['number']
                                                 ]);
  echo "<script>alert('User Updated Successfully')</script>" ;
  $profiless=Register::get()->toArray();
                return view('home',['profiless'=>$profiless]);

}
public function deleteuser($id){
  Register::where('id',$id)->delete();
echo "<script>alert('User Successfully Deleted')</script>" ;
 $profiless=Register::get()->toArray();
                return view('home',['profiless'=>$profiless]);
         
    }


  }
