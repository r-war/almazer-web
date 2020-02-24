<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;

class UserController extends Controller
{

    public $successStatus = 200;

    public function login(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('nApp')->accessToken;
            return response()->json(['success' => $success], $this->successStatus);
        }
        else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }

    public function register(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required',
        //     'c_password' => 'required|same:password',
        // ]);

        // if ($validator->fails()) {
        //     return response()->json(['error'=>$validator->errors()], 401);            
        // }

        // $input = $request->all();
        // $input['password'] = bcrypt($input['password']);
        // $user = User::create($input);
        // $success['token'] =  $user->createToken('nApp')->accessToken;
        // $success['name'] =  $user->name;

        return response()->json(['success'=>$success], $this->successStatus);
    }

    public function details()
    {
        $user = Auth::user();
        return response()->json(['success' => $user], $this->successStatus);
    }
    
    /* Search user by license_plate */
    public function search(Request $request)
    {    
        $query = strtoupper(trim($request->input('search_query')) );
        
        //str_pad($query, 3, '0', STR_PAD_LEFT);
        
        $user = User::search($query, null, true)
        //->orWhere('number', 'like', "%$query%")
        ->get();
        
        //return $user;
        if(!$user->isEmpty()){
            return response()->json(['success'=>$user], $this->successStatus);
        }else{
            return response()->json(['error'=>'Searching is not found'], 401);
        }
    }

    public function fcm(Request $request){
        $user =  User::findOrFail($request->id);

        if($user)
            $user->firebase_token = $request->token;

        if($user->save()){
            return response()->json(['success'=> 'added token', $this->successStatus]);
        }
    }

}