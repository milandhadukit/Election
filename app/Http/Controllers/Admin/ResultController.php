<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vote;
use App\Models\CandidateInfo;
use App\Models\NewElection;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ResultController extends Controller
{
    //
    public function ViewResult()
    {

        
        $total=Vote::all()->count();

         $candidate_1=DB::table('votes')
         ->select('candidate_id')
         ->where('candidate_id','=','4')
         ->count();

         $candidate_2=DB::table('votes')
         ->select('candidate_id')
         ->where('candidate_id','=','9')
         ->count();
        
        // $check=$candidate_1+$candidate_2;
        // dd($check);

        $name1=User::select('name')->where('id','=','48')->first();
        $name2=User::select('name')->where('id','=','7')->first();

         return view('admin.result_view',compact('total','candidate_1','candidate_2','name1','name2'));
    }


    
}
