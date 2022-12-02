<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Session\Session;

class CustomAuthController extends Controller
{
    //
    public function index()
    {
        return view('login.login');
    }


    public function customLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            
        
        ]);

        $loginname = User::where('username',$request->username)
            ->orwhere('email',$request->username)
            ->orwhere('genrate_ids',$request->username)
            ->first();

        $credentials = ['username' => $loginname->username, 'password' => $request->password];

        if (Auth::attempt($credentials)) {
            $status = Auth::user()->status;
            if($status=='-1')
            {
                return redirect()->route("custom.login")->with('message', 'Your Process Not Aprove');
            }

            return redirect()->intended('home')
                ->withSuccess('Signed in');
        }

    
        return redirect()->route("custom.login")->with('message', 'Login details are not valid');
        
    }











    // public function customLogin(Request $request)
    // {
    //     $request->validate([
    //         'username' => 'required',
    //         'password' => 'required',
            
        
    //     ]);

    //     $credentials = $request->only('username','email','genrate_ids','password');

    //     if (Auth::attempt($credentials)) {
    //         $status = Auth::user()->status;
    //         if($status=='-1')
    //         {
    //             return redirect()->route("custom.login")->with('message', 'Your Process Not Aprove');
    //         }

    //         return redirect()->intended('home')
    //             ->withSuccess('Signed in');
    //     }

    
    //     return redirect()->route("custom.login")->with('message', 'Login details are not valid');
        
    // }


    
























    public function signOut()
    {
        // Session::flush();
        Auth::logout();

        return Redirect()->route('custom.login');
    }
}
