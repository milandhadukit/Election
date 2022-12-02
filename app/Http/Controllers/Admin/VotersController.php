<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DataTables;
use Illuminate\Support\Str;
use App\Mail\registermail;
use Illuminate\Support\Facades\Mail;
use App\Models\CandidateInfo;



class VotersController extends Controller
{
    public function index()
    {
        return view('admin.voters.view_voters');
    }

    public function viewVoters(Request $request)
    {
        if ($request->ajax()) {
            // $data = User::latest()->get();
            $data = User::where('role_id','=','2')->where('status','!=','-1')->latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    
                    $actionBtn =
                     '
                     <a href="'.route('admin.edit-voters',$row->id).'" class="edit btn btn-success btn-sm">Edit</a> 
                    <a href="'.route('admin.delete-voters',$row->id).'" id="delete" class="delete btn btn-danger btn-sm" ">Delete</a>';

                   
                    // id="delete
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }


    public function VoterDelete($id)
    {
        $user = User::find($id);
        $user->delete();
        // return response()->json(['messege'=>'success'],200);
         return redirect()->route('admin.view-voters');
    }

    public function VoterAdd()
    {
        return view('admin.voters.add_voter');
    }


    public function EditVoters($id)
    {       
            $user=User::find($id);
            return view('admin.voters.edit_voter',compact('user'));
    }

    public function VoterUpdate(Request $request,$id)
    {
        
        $data = $request->validate([
            'name' => 'required|regex:/^[a-zA-Z ]+$/',
            'sirname'=>'required|regex:/^[a-zA-Z ]+$/',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
            'address' => 'required',
            'state' => 'required|regex:/^[a-zA-Z ]+$/',
            'city' => 'required|regex:/^[a-zA-Z ]+$/',
            'area' => 'required',
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
        return redirect()->route('admin.view-voters');



    }
    public function VoterStore(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|regex:/^[a-zA-Z ]+$/',
            'sirname'=>'required|regex:/^[a-zA-Z ]+$/',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
            'address' => 'required|min:2',
            'state' => 'required|regex:/^[a-zA-Z ]+$/',
            'city' => 'required|regex:/^[a-zA-Z ]+$/',
            'area' => 'required',
            'father_name' => 'required|regex:/^[a-zA-Z ]+$/',
        ]);


        $user = new User();
        $rendomname = str::random(3);
        $username = $request->name . $request->sirname . $rendomname;
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
        $user->role_id = $request->role_id;

        $user->save();

        $email = $request->email;
        $mailsend = array(
            'name' => $request->name,
            'username' => $username,
            'password' => $password,
        );
        Mail::to($email)->send(new registermail($mailsend));

        return redirect()->back()->with('message', ' Your Details Register Successfully');
    }
}
