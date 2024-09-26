<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class AuthController extends Controller
{
    public function login(Request $request){

        return view('auth.login');
    }
    public function login_post(Request $request){
        // dd($request->all());
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password],true)) {
            if (Auth::User()->is_role=='1') {
                return redirect()->route('dashboard');
            }
            else{
                return redirect()->back()->with('error','Please enter the correct credentails');
            }
        }else{
            return redirect()->back()->with('error','Please enter the correct credentails');
        }
    }
    public function forgot(){
        return view('auth.forgot');
    }
}
