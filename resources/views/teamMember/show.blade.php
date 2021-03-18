@extends('layout')

@section('content')
    <h3>{{ $team_member->name }}</h3>
    <h5>{{ $team_member->position }}</h5>

    <div class="row">
        <div class="col-md-5">
            <img src="{{ $team_member->profile_image }}" alt="{{ $team_member->name . " profile image" }}" width="390px"/>
        </div>
        <div class="col-md-5">
            <h5>{{ $team_member->job_title }}</h5>
            <h6>Years with Signifly: {{$team_member->years_with_signifly}}</h6>
            <p class="text-justify">{{ $team_member->bio }}</p>
        </div>
        <div class="col-md-2">
            <h5>Contact Information</h5>
            <p>{{ $team_member->email }}</p>
            @if($team_member->phone)
                <p>{{ $team_member->phone }}</p>
            @endif

        </div>
    </div>

    <div class="row">
        <div class="container">
            <h3>Education</h3>
            <div class="row">
                @foreach($team_member->education as $education)
                    <div class="col-md col-sm-12 d-flex align-items-stretch">
                        <div class="card" style="">
                            <div class="card-body">
                                <h6 class="card-text">{{ $education->type . " of " . $education->subject }}</h6>
                                <p class="card-subtitle">{{ $education->school }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="row">
        <div class="container">
            <h3>Skills</h3>
            <div class="row">
                @foreach($team_member->skills as $skill)
                    <div class="col-md col-sm-12 d-flex align-items-stretch">
                        <div class="card card-light" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-subtitle">{{ ucwords($skill->name) }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
