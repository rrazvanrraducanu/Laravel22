<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Validator;
use Request;
use App\User;
use Hash;
use Auth;

class LoginController extends Controller
{
    public function index(){
        $title="Homepage";
        return view('home.index')->with('title', $title);
    }
    public function login(){
        $title="Login";
        return view('user.index')->with('title', $title);
    }
    public function register(){
        $title="Register";
        return view('user.register')->with('title', $title);
    }
    public function store(){
        $input=Request::all();
        $rules=array(
            'name'=>'required|unique:users',
//’email’ este unic in cadrul tabelei users
            'email'=>'required|unique:users|email',
            'password'=>'required'
        );
        $validation=Validator::make($input,$rules);
        if($validation->fails()){
            return redirect('register')->withErrors($validation->messages());
        }else{
            $user=new User;
            $user->name=Request::input('name');
            $user->email=Request::input('email');
            $user->password=Hash::make(Request::input('password'));
            $user->save();

            return redirect('login');
        }
    }
    public function profile(){
//ucwords() scrie cu majuscule prima literaa string-ului argument
        $title=ucwords(Auth::user()->name);
        return view('user/profile')->with('title', $title);
    }
    public function check()
    {

        $input = Request::all();
        $rules = array(
            'email' => 'required|email',
            'password' => 'required'
        );
        $validation = Validator::make($input, $rules);
        if (Auth::check()) {
            $user = Auth::user();
            return redirect('profile')->with('title', $user);
        } elseif ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation->messages());

        }
        }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

}
