@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col">
        <h1>Player Detail</h1>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <a href="{{ \route('players.index') }}">&lt; Go Back</a>
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
        <dl>
            <dt>Name</dt>
            <dd>{{ $player->name . ' ' . $player->last_name }}</dd>
            <dt>Matches</dt>
            <dd>{{ $player->matches }}</dd>
            <dt>Goals</dt>
            <dd>{{ $player->goals }}</dd>
            <dt>Country</dt>
            <dd>{{ $player->country->name }}</dd>
        </dl>
    </div>
    <div class="col">
        <div class="col">
            <h3>Clubs</h3>

            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Country</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($player->clubs as $club)
                    <tr>
                        <td>{{ $club->name }}</td>
                        <td>{{ $club->country->name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
