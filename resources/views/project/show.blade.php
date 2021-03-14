@extends('layout')

@section('content')
    <h1>{{ $project->title }}</h1>
    <p>{{ $project->client }}</p>
    <p>{{ $project->description }}</p>
@endsection
