<?php

namespace App\Http\Controllers\Auth\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Login;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ResponseController;



class LoginController extends Controller
{
    public $successStatus = 200;
      
            
    public function login(Request $request)
    { 
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('MyApp')-> accessToken; 
            $success['name'] =  $user->name;
   
            return $this->sendResponse($success, 'User login successfully.');
        } 
        else{ 
            return 'unauthorized';
        } 
    }
            public function details() 
            { 
                $user = Auth::user(); 
                return response()->json(['success' => $user], $this-> successStatus); 
            } 
        

}
