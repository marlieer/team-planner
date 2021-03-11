@extends('layout')

@section('content')

    <table class="table table-hover">
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Years with Signifly</th>
            <th>View</th>
        </tr>
        @foreach($teamMembers as $teamMember)
            <tr>
                <td>{{ $teamMember->name }}</td>
                <td>{{ $teamMember->position }}</td>
                <td>{{ $teamMember->years_with_signifly }}</td>
                <td><a href="{{ route('team_member.show', ['team_member' => $teamMember]) }}">View</a></td>
            </tr>
        @endforeach
    </table>
@endsection
