<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\UserRegister;
use Auth ;
use App\Http\Requests\voitureRequest;

class UserRegisterController extends Controller
{
  

	

    
    
     public function store(Request $request){
    	
         $user=new UserRegister();
        $user->name=$request->input('name');
        $user->lname=$request->input('lname');
        $user->birthdate=$request->input('birthdate');
        $user->gender=$request->input('gender');
        $user->phone=$request->input('phone');
        $user->country=$request->input('country');
        $user->city=$request->input('city');
        $user->zip_code=$request->input('zip_code');
        $user->adress=$request->input('adress');
        $user->weight=$request->input('weight');
        $user->height=$request->input('height');
        $user->email=$request->input('email');
        $user->password=$request->input('password');

        $user->save();
        return redirect('home');
   
}
}