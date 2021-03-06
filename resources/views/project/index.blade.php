@extends('layout')

@section('content')
    <table class="table table-hover">
        <tr>
            <th>Title</th>
            <th>Client</th>
            <th>View</th>
        </tr>
        @foreach($projects as $project)
            <tr>
                <td>{{ $project->title }}</td>
                <td>{{ $project->client }}</td>
                <td><a href="{{route('project.show', ['project' => $project])}}">View</a></td>
            </tr>
        @endforeach
    </table>
    <div class="create-project">
        <a href="{{route('project.create')}}" class="btn btn-success create-project-btn">Create New Project</a>
    </div>
@endsection
