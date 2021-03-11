@extends('layout)

@section('content')

    <table>
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
            </tr>
    </table>
@endsection
