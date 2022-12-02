<?php

namespace App\Http\Controllers\Voters;

use App\Models\User;
use App\Models\NewElection;
use Illuminate\Http\Request;
use App\Models\CandidateInfo;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Vote;
// use Illuminate\Support\Carbon;
use Carbon\Carbon;

class ViewCandidateController extends Controller
{
    //
    public function ViewCandidate()
    {
        $candidate = User::where('role_id', '=', 3)->paginate(5);

        return view('Voters.view_candidate', compact('candidate'));
    }

    public function ViewElection()
    {
        $election = NewElection::paginate(5);
        $currentTime = Carbon::now();
        return view('Voters.view_election', compact('election','currentTime'));
    }

    
    public function image($user_id)
    {
       
        $candidate_info = DB::table('candidate_infos')
            ->select('image')
            ->where('user_id', '=', $user_id)
            ->limit(1)
            ->get();
    }
   
   
   
    public function ViewVoteCandidate($id)
    {

        $candidate = NewElection::find($id);

        $candidte_1 = DB::table('candidate_infos')
            ->select('id', 'image')
            ->where('user_id', '=', $candidate->candidate_1)
            ->first();


        $candidate_2 = DB::table('candidate_infos')
            ->select('id', 'image')
            ->where('user_id', '=', $candidate->candidate_2)
            ->first();
        $c1 = $candidte_1->image;
        $c2 = $candidate_2->image;
        $id = $candidte_1->id;
        $id2 = $candidate_2->id;

// ($candidate->candidate_1);



        $currentTime = Carbon::now();

    $name_candidate1=$candidate->candidate_1;
    $name_candidate2=$candidate->candidate_2;

    
        $name1=User::select('name')->where('id','=',$name_candidate1)->first();
        $name2=User::select('name')->where('id','=',$name_candidate2)->first();




        return view('Voters.view_voters_candidate', compact('candidate', 'c1', 'c2', 'id', 'id2','currentTime','name1','name2'));
    }
}
