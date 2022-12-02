<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Mail\registermail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;



class UserController extends Controller
{
    public function AddUser()
    {
        return view('user.user_register');
    }

    public function StoreUser(Request $request)
    {
        
        $data = $request->validate([
            'name' => 'required|regex:/^[a-zA-Z ]+$/',
            'sirname'=>'required|regex:/^[a-zA-Z ]+$/|max:20',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
            'address' => 'required',
            'state' => 'required|regex:/^[a-zA-Z ]+$/|max:20',
            'city' => 'required|regex:/^[a-zA-Z ]+$/|max:20',
            'area' => 'required',
            'father_name' => 'required|regex:/^[a-zA-Z ]+$/|max:40',
        ]);


        $user = new User();
        $rendomname=str::random(3);
        $username = $request->name . $request->sirname.$rendomname;
        $password = str::random(6);
        $user->name = $request->name;
        $user->sirname = $request->sirname;
        $user->username = $username;
        $user->address = $request->address;
        $user->state = $request->state;
        $user->city = $request->city;
        $user->area = $request->area;
        $user->father_name = $request->father_name;
        $user->email = $request->email;
        $user->password = bcrypt($password);
        $user->role_id=$request->role_id;
        $genrate = str::random(7);
        $user->genrate_ids= $genrate;
      
        $user->save();
        $email = $request->email;
        $mailsend = array(
            'name' => $request->name,
            'username' => $username,
            'password' => $password,
            'genrate_ids'=>$genrate,
            'emailsend'=>$request->email,
        );
        Mail::to($email)->send(new registermail($mailsend));

        return redirect()->back()->with('message', ' Your Details Register Successfully');
    }
}
