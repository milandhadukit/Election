<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\NewElection;
use App\Models\Vote;
use App\Models\CandidateInfo;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Carbon;


class ViewElection extends Controller
{
    //
    public function ViewElections()
    {

        $election = NewElection::paginate(5);
        $currentTime = Carbon::now();
        return  view('admin.view_elections', compact('election', 'currentTime'));
    }

    public function DeleteElection($id)
    {
        $election = NewElection::find($id);
        $election->delete();
        return redirect()->route('admin.view-elections');
    }
    public function EditElection($id)
    {
        $election = NewElection::find($id);

        return view('admin.edit_election', compact('election'));
    }

    public function UpdateElection(Request $request, $id)
    {
        $data = $request->validate([

            'title' => 'required',
            // 'date' => 'required|after_or_equal:today', 
            'date' => 'required',
        ]);
        $election = NewElection::find($id);
        $election->title = $request->title;
        $election->date = $request->date;
        $election->save();
        return redirect()->route('admin.view-elections');
    }


    public function ViewResultElection($id)
    {

        $specific = NewElection::find($id);

        // dd($specific->id);
        // $eleId=$specific->id;

        $title = DB::table('votes')
            ->select('election_id')
            ->where('election_id', '=', $id)
            ->count();

        //  $candidate_1=DB::table('votes')
        // DB::enableQueryLog();

        $name_candidate1 = $specific->candidate_1;
        $name_candidate2 = $specific->candidate_2;

        // $chnge_title = DB::table('candidate_infos')
        //     ->join('votes','votes.candidate_id','=','candidate_infos.id')
        //     ->where('candidate_infos.user_id', '=', $specific->candidate_1)
        //     ->where('votes.election_id', '=', $id)  
        //     ->count();
        
            
        
        //  $candidate1_id = Vote::select('candidate_id')->where('id','=',$name_candidate1)->first();
        //   return $candidate1_id;

        // $canId = Vote::where("election_id",$id)->pluck('candidate_id')->first();
        
        // echo "<pre>";
        // print_r($canId);



        $candidate_1 = DB::table('votes')
            ->select('candidate_id', 'election_id')
            ->where('election_id', '=', $id)
            ->where('vote_candidate', '=', $name_candidate1)
            ->count();
        
        // dd(DB::getQueryLog());

        $candidate_2 = DB::table('votes')
            ->select('candidate_id', 'election_id')
            ->where('election_id', '=', $id)
             ->where('vote_candidate', '=',$name_candidate2)
            ->count();
            
        $name1 = User::select('name')->where('id', '=', $name_candidate1)->first();
        $name2 = User::select('name')->where('id', '=', $name_candidate2)->first();




        return view('admin.result_viewspecific', compact('title', 'candidate_1', 'candidate_2', 'name1', 'name2'));
    }
}
