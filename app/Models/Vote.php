<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    
    use HasFactory;
    // protected $guarded=[];
    protected $fillable = [
        'id',
        'user_id',
        'election_id',
        'candidate_id',
       
    ];
    
}
