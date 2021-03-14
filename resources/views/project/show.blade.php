@extends('layout')

@section('content')
    <div class="container">
        <h1>{{ $project->title }}</h1>
        <h3>Client: {{ $project->client }}</h3>
        <p>{{ $project->description }}</p>
    </div>

    <div class="container">
        <h3>Project Education Requirements</h3>
        <div class="row">
            @foreach($project->education as $education)
                <div class="col-md col-sm-12 d-flex align-items-stretch">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $education->type . " of " . $education->subject }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container">
        <h3>Project Skill Requirements</h3>
        <div class="row">
            @foreach($project->skills as $skill)
                <div class="col-md col-sm-12 d-flex align-items-stretch">
                    <div class="card card-light" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $skill->name }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container">
        <h3>Project Team Members</h3>
        <div class="row">
            @foreach($project->teamMembers as $team_member)
                <div class="col-md col-sm-12 d-flex align-items-stretch">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset($team_member->profile_image)}}" alt="people">
                        <div class="card-body">
                            <h5 class="card-title">{{ $team_member->name }}</h5>
                            <p class="card-subtitle">{{ $team_member->job_title }}</p>
                            <p class="card-text">{{ $team_member->email }}</p>
                            <a target="_blank" href="{{ route('team_member.show', ['team_member' => $team_member->id]) }}">Learn More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
