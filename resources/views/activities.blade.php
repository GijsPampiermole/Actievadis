@extends('layout')
@section('content')
    <p>Activities</p>
    @foreach($activities as $activity)
        <div class="activity">
            <h2>{{ $activity->name }}</h2>
            <p>{{ $activity->description }}</p>
            <p>{{ $activity->location }}</p>
            <p>{{ $activity->startTime }}</p>
            <p>{{ $activity->endTime }}</p>
            <p>{{ $activity->price }}</p>
            <p>{{ $activity->food }}</p>
            <p>{{ $activity->needs }}</p>
            <p>{{ $activity->maxParticipants }}</p>
            <p>{{ $activity->minParticipants }}</p>
        </div>
    @endforeach
@endsection