<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function login(){
        return view('admin.login');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function logincheck(Request $request){

        if($request->isMethod('post')){

            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);
     
            if (Auth::attempt($credentials)) {

                $request->session()->regenerate(); 
                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }

        else{            
            return view('admin.login');
        }      
    }

    public function logout(Request $request){  

        Auth::logout(); 
        $request->session()->invalidate();     
        $request->session()->regenerateToken();      
        return redirect('admin/login');     
    }

}

?>
