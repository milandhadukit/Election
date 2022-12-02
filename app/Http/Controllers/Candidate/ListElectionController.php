<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CandidateInfo;
use App\Models\NewElection;
use App\Models\Role;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ListElectionController extends Controller
{
    //
    public function ViewElectionList()
    {
        $election = NewElection::paginate(5);
        $currentTime = Carbon::now();
        return view('Candidate.view_election',compact('election','currentTime'));
    }

    public function ViewElectionResults($id)
    {

        $specific = NewElection::find($id);

        $candidate_1 = DB::table('votes')
            ->select('candidate_id', 'election_id')
            ->where('election_id','=',$id)
             ->where('candidate_id', '=', '4')
            ->count();


            $candidate_2=DB::table('votes')
            ->select('candidate_id', 'election_id')
            ->where('election_id','=',$id)
            ->where('candidate_id','=','9')
            ->count();
            
           $name1=User::select('name')->where('id','=','48')->first();
           $name2=User::select('name')->where('id','=','7')->first();
          
        return view('Candidate.view_result_election', compact('title','candidate_1','candidate_2','name1','name2'));
    }
}
