@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col">
        <h1>Player List</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a href="{{ \route('players.create') }}" class="btn btn-primary">+ Add New Player</a>
    </div>
</div>
<hr />
@if (session('status'))
<div class="row">
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
</div>
@endif
<div class="row">
    <div class="col">
        <table class="table">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Matches</th>
                    <th>Score</th>
                    <th>Clubs</th>
                    <th>Country</th>
                    <th>--</th>
                </tr>
            </thead>
            <tbody>
                @foreach($players as $player)
                <tr>
                    <td>{{ $player->name.' '.$player->last_name }}</td>
                    <td>{{ $player->matches }}</td>
                    <td>{{ $player->goals }}</td>
                    <td>
                        @foreach($player->clubs as $club)
                        <span class="badge badge-primary">{{ $club->name }}</span>
                        @endforeach
                    </td>
                    <td>
                        {{ $player->country->name }}
                    </td>
                    <td>
                        <a href="{{ \route('players.show', ['player' => $player]) }}">Details</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
