@extends('layouts.all')

@section('login')



<div class="row d-flex justify-content-center">
    <div class="card border-primary mb-3" style="max-width: 18rem;">
        <div class="card-header bg-transparent border-primary"><h5> Votes ToTaL</h5></div>
        <div class="card-body text-primary">
            <h5 class="card-title">ToTaL Votes</h5>
            <p class="card-text">{{ $total }}</p>
        </div>
        <div class="card-footer bg-transparent border-primary">......</div>
    </div>
    
    @if (Auth::user()->id == '48')
    <div class="card border-warning mb-3" style="max-width: 18rem;">
        <div class="card-header bg-transparent border-warning"><h5> Yours Votes</h5></div>
        <div class="card-body text-warning">
            <h5 class="card-title"> Yours ToTaL Votes</h5>
            <p class="card-text">{{ $candidate_1 }}</p>
        </div>
        <div class="card-footer bg-transparent border-warning">......</div>
    </div>
@endif




@endsection