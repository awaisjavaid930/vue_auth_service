<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    
    public function register(Request $request)
    {
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $user->createToken('MyApp')->accessToken;
        return response()->json(['status' => 200 , 'data' => 'record saved!']);
    }
    
    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('MyApp')-> accessToken; 
            $success['name'] =  $user->name;
            return response()->json(['status' => 200 , 'data' => $success ]);
        } 
        else{ 
            return response()->json(['status' => 404 , 'error' => 'something going wrong!']);
        } 
    }
    
    public function userDetail()
    {
        $user = Auth::user();
        return response()->json(['status' => 200 , 'data' => $user ]);
    }
    
}
