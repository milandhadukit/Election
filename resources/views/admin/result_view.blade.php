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


    <div class="card border-warning mb-3" style="max-width: 18rem;">
        <div class="card-header bg-transparent border-warning"><h5> {{ $name1->name }} Votes</h5></div>
        <div class="card-body text-warning">
            <h5 class="card-title">ToTaL Votes</h5>
            <p class="card-text">{{ $candidate_1 }}</p>
        </div>
        <div class="card-footer bg-transparent border-warning">......</div>
    </div>

    <div class="card border-info mb-3" style="max-width: 18rem;">
        <div class="card-header bg-transparent border-info"> <h5>{{ $name2->name }} Votes</h5></div>
        <div class="card-body text-info">
            <h5 class="card-title">ToTaL Votes</h5>
            <p class="card-text">{{ $candidate_2 }}</p>
        </div>
        <div class="card-footer bg-transparent border-info">......</div>
    </div>

    <div class="card border-danger mb-3" style="max-width: 18rem;">
        <div class="card-header bg-transparent border-danger"> <h5>Results</h5></div>
        <div class="card-body text-success">

            @if ($candidate_1 > $candidate_2)
                <div>
                    <strong>Win</strong> {{ $name1->name }}
                </div>
            @elseif ($candidate_1 == $candidate_2)
                <div class="alert alert-warning">
                    <strong>SAME</strong> Tie
                </div>
            @else
                <strong>Win</strong>{{ $name2->name }}
            @endif
        </div>
        <div class="card-footer bg-transparent border-danger">......</div>
    </div>
</div>
@endsection
