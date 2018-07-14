<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Validator;
class UsersController extends Controller
{
    //
    public function index(){
        
        $users = User::all();
        return view('pages.user.index')->with('users',$users);
    }

    public function getUser($id){
        $user = User::where('id',$id)->first(['name','id','email']);
        return view('pages.user.profile')->with('user',$user);
    }

    public function edit(Request $request, $id){
        $user = User::where('id',$id)->first(['name','id','email']);
        $user->name = $request->name;
        $user->save();
        return view('pages.user.profile')->with('user',$user);
        
        
        
        
    }

    public function getUsers(){
        $users = User::all(['name','id','email']);

        return response($users);
    }

    public function create(Request $request){
        if(!$request->filled('name')){
            return response()->json([
                'status'=>'error',
                'error'=>'Name is required'

            ]);
        }
        if(!$request->filled('email')){
            return response()->json([
                'status'=>'error',
                'error'=>'Email is required'

            ]);
        }
        if(!$request->filled('password')){
            return response()->json([
                'status'=>'error',
                'error'=>'Password is required'

            ]);
        }

        $data = $request->all();
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
        
    }


}
