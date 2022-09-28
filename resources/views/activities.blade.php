@extends('layout')
@section('content')
    <p>Activities</p>

    <div class="accordion">
        @foreach($activities as $activity)
        <div class="header" id="accordion-header">
            <div class="left">27/01</div>
            <div class="middle">{{ $activity->name }}</div>
            <div class="end">
                <img src="down-arrow-5.svg" alt="" class="svg-dropdown">
            </div>
        </div>
        <div class="content" id="accordion-content" style="max-height: 0px;">
            <div class="image"><img src="https://via.placeholder.com/150" alt=""></div>
            <div class="location">{{ $activity->location }}</div>
            <div class="food">{{ $activity->food }}</div>
            <div class="price">{{ $activity->price }}</div>
            <div class="start-time">{{ $activity->startTime }}</div>
            <div class="end-time">{{ $activity->endTime }}</div>
            <div class="description">{{ $activity->description }}</div>
            <div class="needs">{{ $activity->needs }}</div>
            <div class="participants">{{ $activity->minParticipants }} - {{ $activity->maxParticipants }} participants</div>
            <div class="current-participants">6 participants</div>
        </div>
        @endforeach
    </div>
    
    <button id="btn">
        <a href="/addActivities">Add activity</a>
    </button>
@endsection