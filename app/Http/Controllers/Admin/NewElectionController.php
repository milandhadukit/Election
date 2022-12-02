<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewElection;
use App\Models\CandidateInfo;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class NewElectionController extends Controller
{
    //
    public function AddElection()
    {

        $data['user'] = User::where('role_id', '=', 3)->where('status','!=','-1')->get();

        return view('admin.addelection',$data);
    }   

    // public function fetchcandidate(Request $request)
    // {
        
    //     $data['fetch'] = User::where("id",'=',$request->id)
    //                             ->get();
  
    //     return response()->json($data);
    // }

    public function StoreNewElection(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'date' => 'required|after_or_equal:today', 
            
        ]);

        $election = new NewElection();
        $election->title = $request->title;
        $election->date = $request->date;
        $election->candidate_1 = $request->candidate_1; 
        $election->candidate_2 = $request->candidate_2;

        $election->save();
        return redirect()->back()->with('message', ' Add Successfully');
    }

    public function AddInfoCandidate()
    {

        $id=User::where('role_id', '=', 3)->get();
        return view('admin.candidate_info',compact('id'));
    }

    public function StoreInfoCandidate(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required',
            'info' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);


        $image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($image->getClientOriginalExtension());
        $img_name = $name_gen . '.' . $img_ext;
        $up_location = 'Candidate_Image/';
        $last_img = $up_location . $img_name;
        $image->move($up_location, $img_name);

        $infocandidate = new CandidateInfo();
        $infocandidate->user_id=$request->user_id;
        $infocandidate->info=$request->info;
        $infocandidate->image=$img_name;
        $infocandidate->save();
         return redirect()->back()->with('message', ' Add Successfully');
        
    }
}
