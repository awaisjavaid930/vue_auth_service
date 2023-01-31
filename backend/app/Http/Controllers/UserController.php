<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;

class UserController extends Controller
{
    
    public function register(Request $request)
    {
        $request['password'] = Hash::make($request['password']);
        User::create($request->all());
        return response()->json(['status' => 200 , 'message' => 'records saved!']);
    }
    
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required|string',
            'email' => 'required|string|email',
        ]);
        
        if ($validator->fails()) {
            return response(['errors' => $validator->errors()->all()], 422);
        } else {
            $credentials = $request->only(['email', 'password']);
            if(!Auth::attempt($credentials)) {
                return response()->json(['success' => false, 'message' => 'invalid Email or Password!']);
            } else {
                $user = Auth::user();
                $accessToken = $user->createToken('AuthToken')->accessToken;
                $user['token'] = $accessToken;
                $response =  array('success' => true, 'data' => $user,'messgae' => "Login success");
                return response()->json($response);
            }
        }
    }
    
}
