@extends('layout')

@section('content')
    <div class="container">
        <h1>{{ $project->title }}</h1>
        <h3>Client: {{ $project->client }}</h3>
        <p>{{ $project->description }}</p>
        <p>Minimum number of years at Signifly required by project team members: {{ $project->minimum_years_with_signifly }}</p>
    </div>

    <div class="container">
        <h4>Project Education Requirements</h4>
        <div class="row">
            @foreach($project->education as $education)
                <div class="col-md col-sm-12 d-flex align-items-stretch">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h6 class="card-subtitle">{{ $education->type . " of " . $education->subject }}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container">
        <h4>Project Skill Requirements</h4>
        <div class="row">
            @foreach($project->skills as $skill)
                <div class="col-md col-sm-12 d-flex align-items-stretch">
                    <div class="card card-light" style="width: 18rem;">
                        <div class="card-body">
                            <h6 class="card-subtitle">{{ ucwords($skill->name) }}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container">
        <h4>Project Team Members</h4>
        <div class="row">
            @foreach($project->teamMembers as $team_member)
                <div class="col-md col-sm-12 d-flex align-items-stretch">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset($team_member->profile_image)}}" alt="people">
                        <div class="card-body">
                            <h5 class="card-title">{{ $team_member->name }}</h5>
                            <p class="card-subtitle">{{ $team_member->job_title }}</p>
                            <p class="card-text">{{ $team_member->email }}</p>
                            <a href="{{ route('team_member.show', ['team_member' => $team_member->id]) }}">Learn More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
