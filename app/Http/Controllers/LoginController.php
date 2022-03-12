<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function postlogin(Request $request){
        if(Auth::attempt([
            'name'=>$request->username,
            'password'=>$request->password,
        ])){ 
            return redirect('home');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    public function registration(){
        return view('registration');
    }
    public function postregistration(Request $request){
       $user = new User;
       $user->name = $request->username;
       $user->	email = $request->	email;
       $user->password = bcrypt($request->password);
       $user->save();
       return redirect('/')->with('Thông báo', 'Đăng ký thành công');
    }
}
