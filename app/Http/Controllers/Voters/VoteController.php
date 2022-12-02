<?php

namespace App\Http\Controllers\Voters;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vote;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Dotenv\Validator;

class VoteController extends Controller
{
    public function AddVote(Request $request)
    {

        // $data = $request->validate(
        //     [
        //         'user_id' => 'required',
        //         // 'election_id' => 'unique:votes,election_id,'.$id,
        //         // 'election_id' => 'unique:votes,election_id'.$id,
        //         'election_id' => 'unique:votes,election_id',
        //         // 'election_id'=>'required|unique:votes,user_id,'.$request->id.',id,election_id,'.$request->election_id,
        //     ],
        // );





     $data = $request->validate([
             'vote_candidate' => 

            Rule::unique('votes')->where( 'vote_candidate', 'election_id') 
                                ->where('vote_candidate', 'vote_candidate')
                                ->where('election_id', 'election_id')
        
     ]);
        


        // $messages = [
        //     'data.voter_id.unique' => 'You Have Already Vote for this election',
        // ];



        // Validator::make(
        //     $request,
        //     [
        //         'data.vote_candidate' => [
        //             'required',
        //             Rule::unique('votes')->where(function ($query) use ($vote_candidate, $election_id) {
        //                 return $query->where('vote_candidate', $vote_candidate)
        //                     ->where('election_id', $election_id);
        //             }),
        //         ],
        //     ],
        //     $messages
        // );


        $vote = new Vote();
        $vote->user_id = auth()->user()->id;
        $vote->election_id = $request->election_id;
        $vote->candidate_id = $request->candidate_id;
        $vote->vote_candidate = $request->vote_candidate;



        // $abc=Vote::select('id','user_id')->where('user_id','=',auth()->user()->id)
        // ->get();
        // return $abc;



        $vote->save();
        return redirect()->back()->with('message', ' Vote Done--Thank You');


        //  $multiple = Vote::select('*')->where('user_id', Auth::user()->id)->first();
        // if ($multiple) {
        //     return back()->with('message', 'You already voted');
        // } else {

        //     $vote = new Vote();
        //     $vote->user_id = auth()->user()->id;
        //     $vote->election_id = $request->election_id;
        //     $vote->candidate_id = $request->candidate_id;



        //     $vote->save();

        //     return redirect()->back()->with('message', ' Vote Done--Thank You');
        // }
    }

    public function AddVote2(Request $request)
    {

        $vote = new Vote();
        $vote->user_id = auth()->user()->id;
        $vote->election_id = $request->election_id;
        $vote->candidate_id = $request->candidate_id;
        $vote->vote_candidate = $request->vote_candidate;
        $vote->save();
        return redirect()->back()->with('message', ' Vote Done--Thank You');




        // $multiple = Vote::where('user_id', Auth::user()->id)->first();
        // if ($multiple) {
        //     return back()->with('message', 'You already voted');
        // } else {


        //     $vote = new Vote();
        //     $vote->user_id = auth()->user()->id;
        //     $vote->election_id = $request->election_id;
        //     $vote->candidate_id = $request->candidate_id;



        //     $vote->save();

        //     return redirect()->back()->with('message', ' Vote Done--Thank You');
        // }
    }
}
