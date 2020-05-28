@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col">
        <h1>Add New Player</h1>
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
<form action="{{ \route('players.store') }}" method="post">
    @csrf
    <div class="row">
        <div class="col">
            <div class="form-group row">
                <label for="name">First Name</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" />
                @error('name')
                    <span class="text-error" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group row">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" />
                @error('last_name')
                    <span class="text-error" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group row">
                <label for="matches">Matches</label>
                <input type="number" class="form-control" name="matches" value="{{ old('matches') }}" />
                @error('matches')
                    <span class="text-error" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group row">
                <label for="goals">Goals</label>
                <input type="number" class="form-control" name="goals" value="{{ old('goals') }}" />
                @error('goals')
                    <span class="text-error" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group row">
                <label for="country_id">Country</label>
                @php $country_id = old('country_id'); @endphp
                <select name="country_id" class="form-control"
                    oldautocomplete="remove" autocomplete="off" aria-invalid="false">
                    <option value="">Select</option>
                    @foreach ( $countries as $country)
                    <option value="{{ $country->id }}"
                        @if($country->id== $country_id) selected="selected" @endif>{{ $country->name }}
                    </option>
                    @endforeach
                </select>
                @error('country_id')
                    <span class="text-error" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col">
            <h3>Clubs</h3>
            @foreach($clubs as $club)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1"
                    name="clubs[{{ $club->id }}]" id="club{{ $club->id }}"
                    @if( old('clubs.'.$club->id) ) checked @endif >
                <label class="form-check-label" for="club_{{ $club->id }}">
                    {{ $club->name }}
                </label>
            </div>
            @endforeach
            @error('clubs')
                <span class="text-error" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row">
        <button type="submit" class="btn btn-primary">Create Player</button>
    </div>
</form>
@endsection
