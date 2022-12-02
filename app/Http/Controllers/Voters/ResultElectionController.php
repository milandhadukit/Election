<?php

namespace App\Http\Controllers\Voters;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\CandidateInfo;
use App\Models\NewElection;
use App\Models\Role;
use App\Models\User;
use App\Models\Vote;

class ResultElectionController extends Controller
{
    //
    public function ViewElectionResult($id)
    {

        $specific = NewElection::find($id);

        $title = DB::table('votes')
        ->select('election_id')
        ->where('election_id', '=', $id)
        ->count();
        $name_candidate1 = $specific->candidate_1;
        $name_candidate2 = $specific->candidate_2;

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
    
        

        return view('Voters.view_election_result',compact('title','candidate_1','candidate_2','name1','name2'));
    }
}
