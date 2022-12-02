<?php

namespace App\Models;

use App\Models\NewElection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CandidateInfo extends Model
{
    use HasFactory;
    protected $guarded=[];  

    public function election()
    {
        return $this->belongsTo(NewElection::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
