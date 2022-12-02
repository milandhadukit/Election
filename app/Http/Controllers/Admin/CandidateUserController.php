<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CandidateInfo;
use App\Models\User;
use App\Mail\registermail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class CandidateUserController extends Controller
{
    //
    public function ViewCandidateUser()
    {
        $usercandidate=User::where('role_id','=','3')->where('status','!=','-1')->get();
        return view('admin.candidate.candidate_user_view',compact('usercandidate'));
    }
    public function DeleteCandidateUser($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect()->route('admin.view-candidates-user');
    }
    public function EditCandidateUser($id)
    {       
            $user=User::find($id);
            return view('admin.candidate.edit_candidate_user',compact('user'));
    }
    public function UpdateCandidateUser(Request $request,$id)
    {
        $data = $request->validate([
            'name' => 'required|regex:/^[a-zA-Z ]+$/',
            'sirname'=>'required|regex:/^[a-zA-Z ]+$/',
            // 'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
            'address' => 'required',
            'state' => 'required',
            'city' => 'required|regex:/^[a-zA-Z ]+$/',
            'area' => 'required|regex:/^[a-zA-Z ]+$/',
            'father_name' => 'required|regex:/^[a-zA-Z ]+$/',
        ]);
        $user=User::find($id);
        $user->name = $request->name;
        $user->sirname = $request->sirname;
        $user->address = $request->address;
        $user->state = $request->state;
        $user->city = $request->city;
        $user->area = $request->area;
        $user->father_name = $request->father_name;
        $user->email = $request->email;
        $user->role_id = $request->role_id;
        $user->save();
        return redirect()->route('admin.view-candidates-user');
    }

}
