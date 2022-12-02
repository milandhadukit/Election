<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\CandidateInfo;
use App\Models\NewElection;
use App\Models\Role;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Support\Carbon;

class VoteCandidateController extends Controller
{
    //
    public function TotalVote()
    {

        $total=Vote::all()->count();

        $user = auth()->user();
        $id=$user->id;

        $candidate_1=DB::table('votes')
         ->select('candidate_id','vote_candidate')
         ->where('vote_candidate','=',$id)
         ->count();

        return view('Candidate.total_vote',compact('candidate_1','total'));
    }

    public function ViewVoteElection()
    {

        $user = auth()->user();
        $id1=$user->id;

        
        $election = NewElection::select('*')->where('candidate_1','=',$id1)->orwhere('candidate_2','=',$id1)->paginate(5);
        
        //  $election = NewElection::paginate(5);
        $currentTime = Carbon::now();
        return  view('Candidate.view_result', compact('election','currentTime','election'));
    }

    public function ViewCandidateElectionResult($id)
    {

        $specific = NewElection::find($id);

        $name_candidate1 = $specific->candidate_1;
        $name_candidate2 = $specific->candidate_2;

        $title = DB::table('votes')
            ->select('election_id')
            ->where('election_id', '=', $id)
            ->count();

            $candidate_1 = DB::table('votes')
            ->select('candidate_id', 'election_id')
            ->where('election_id', '=', $id)
            ->where('vote_candidate', '=', $name_candidate1)
            ->count();


           
        $candidate_2 = DB::table('votes')
        ->select('candidate_id', 'election_id')
        ->where('election_id', '=', $id)
         ->where('vote_candidate', '=',$name_candidate2)
        ->count();


            
            $name1 = User::select('name')->where('id', '=', $name_candidate1)->first();
            $name2 = User::select('name')->where('id', '=', $name_candidate2)->first();
    
            
           
            return view('Candidate.result_specific',compact('title','candidate_1','candidate_2','name1','name2'));
            
    }
}
