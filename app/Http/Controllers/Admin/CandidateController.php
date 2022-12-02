<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CandidateInfo;
use App\Models\User;
use App\Mail\registermail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class CandidateController extends Controller
{
    //
    public function ViewCandidate()
    {
        $candidate=CandidateInfo::paginate(4);
        return view('admin.candidate.candidate_view',compact('candidate'));
    }
    public function DeleteCandidate($id)
    {
        $candidate=CandidateInfo::find($id);
        $candidate->delete();
        return redirect()->route('admin.view-candidate');
    }
    public function EditCandidate($id)
    {       
            $candidate=CandidateInfo::find($id);
            return view('admin.candidate.edit_candidate',compact('candidate'));
    }

    public function UpdateCandidate(Request $request,$id)
    {
        $data = $request->validate([
            
            'info' => 'required',
            'image' => 'required',
        ]);

        $image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($image->getClientOriginalExtension());
        $img_name = $name_gen . '.' . $img_ext;
        $up_location = 'Candidate_Image/';
        $last_img = $up_location . $img_name;
        $image->move($up_location, $img_name);


        $candidate=CandidateInfo::find($id);
        // $candidate->name=$request->name;
        $candidate->info=$request->info;
        $candidate->image=$img_name;
        $candidate->save();
        return redirect()->route('admin.view-candidate');


    }
    public function AddCandidate()
    {
        return view('admin.candidate.add_condidate');
    }
    public function CandidateStore(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|regex:/^[a-zA-Z ]+$/',
            'sirname'=>'required|min:2|regex:/^[a-zA-Z ]+$/|max:20',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
            'address' => 'required',
            'state' => 'required|regex:/^[a-zA-Z ]+$/|max:20',
            'city' => 'required|regex:/^[a-zA-Z ]+$/|max:20',
            'area' => 'required|max:100',
            'father_name' => 'required|regex:/^[a-zA-Z ]+$/|max:30',
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

    

    // public function ViewCandidateUser()
    // {
    //     $candidate=User::where('role_id','=','3')->where('status','!=','-1')->get();
    //     return view('admin.candidate.candidate_user_view',compact('candidate'));
    // }
    // public function DeleteCandidateUser($id)
    // {
    //     $candidate=User::find($id);
    //     $candidate->delete();
    //     return redirect()->route('admin.view-candidates-user');
    // }
    // public function EditCandidateUser($id)
    // {       
    //         $candidate=User::find($id);
    //         return view('admin.candidate.edit_candidate_user',compact('candidate'));
    // }
    // public function UpdateCandidateUser(Request $request,$id)
    // {
    //     $data = $request->validate([
    //         'name' => 'required',
    //         'sirname'=>'required',
    //         // 'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
    //         'address' => 'required',
    //         'state' => 'required',
    //         'city' => 'required',
    //         'area' => 'required',
    //         'father_name' => 'required',
    //     ]);
    //     $candidate=User::find($id);
    //     $candidate->name = $request->name;
    //     $candidate->sirname = $request->sirname;
    //     $candidate->address = $request->address;
    //     $candidate->state = $request->state;
    //     $candidate->city = $request->city;
    //     $candidate->area = $request->area;
    //     $candidate->father_name = $request->father_name;
    //     $candidate->email = $request->email;
    //     $candidate->role_id = $request->role_id;
    //     $candidate->save();
    //     return redirect()->route('admin.view-candidates-user');
    // }


}
