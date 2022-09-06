<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
       return view('loginview.index');

    }
    public function create()
    {
       return view('loginview.register');

    }

    public function login(Request $request)
    {  
          
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        $user = User::where('email', $request->email)->first();
        //echo '<pre>'; print_r($user);exit; 
        if (!$user || !Hash::check($request->password, $user->password)) {

            return redirect()->route('postindex')
        ->with('success', 'invalid credentials.');

        }

        return view('loginview.dashboard');
    }

    public function register(Request $request)
    {      
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        //print_r($input['password']);exit;
       User::create($input);
        return redirect()->route('postindex')
        ->with('success', 'registered successfully.');

    }

    public function logout(Request $request){

        auth()->logout();
        return redirect()->route('postindex')
        ->with('success', 'logout successfully.');
    }

}
