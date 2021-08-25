<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function viewlogin(){
        return view('auth.login');
    }

    public function proseslogin(Request $request){
        $rules = [
            'username' => 'required',
            'password' => 'required|string',
        ];

        $messages = [
            'username.required' => 'Username Required!',
            'password.required' => 'Password Required!',
            'password.string' => 'Password must be Correct!',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        Auth::attempt($data);

        if(Auth::check()){
            return redirect()->route('home');
        }
        else{
            Session::flash('error', 'Username or Password are not correct!');
            return redirect()->route('login');
        }
    }
    

    public function viewregister(){
        return view('auth.register');
    }

    public function prosesregister(Request $request){
        $rules = [
            'username' => 'required|min:5|max:10',
            'email' => 'required|email|unique',
            'password' => 'required|min:5|max:10',
        ];

        $messages = [
            'username.required' => 'username required',
            'username.min' => 'username min 5',
            'username.max' => 'username max',
            'email.required' => 'email required',
            'email.email' => 'email must be in email format',
            'email.unique' => 'email must be unique',
            'passsword.required' => 'password required',
            'password.min' => 'pass min',
            'password.max' => 'pass max',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $user = new User;
        $user->username = ucwords(strtolower($request->username));
        $user->email = strtolower($request->email);
        $user->password = Hash::make($request->password);
        $save = $user->save();

        if ($save) {
            return redirect()->route('viewlogin');
        }

    }






}