@extends('layout')
@section('content')
    <p>Activities</p>

    <div class="accordion">
        @foreach($activities as $activity)
            <div class="header" id="accordion-header">
                <div class="left">27/01</div>
                <div class="middle">{{ $activity->name }}</div>
                <div class="end">
                    <svg class="svg-icon svg-dropdown"
                         style="width: 1em; height: 1em;vertical-align: middle;fill: currentColor;overflow: hidden;"
                         viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M133.404444 349.108148l365.131852 352.616296c1.232593 1.137778 2.56 2.085926 3.982222 2.939259 7.205926 4.361481 16.592593 3.508148 22.945185-2.56l365.131852-352.616296c7.68-7.395556 7.774815-19.816296 0-27.306667-7.395556-7.205926-19.342222-6.826667-26.737778 0.379259l-351.762963 339.626667c0 0 0 0-0.094815 0L160.047407 322.180741c-7.395556-7.205926-19.342222-7.49037-26.737778-0.379259C125.62963 329.291852 125.724444 341.712593 133.404444 349.108148z"/>
                    </svg>
                </div>
            </div>
            <div class="content" id="accordion-content" style="max-height: 0px;">

                <div class="box">
                    <div class="description">{{ $activity->description }}</div>
                    <div class="needs">{{ $activity->needs }}</div>
                    <div class="food padding-25">{{ $activity->food }}</div>

                    <div class="location">{{ $activity->location }}</div>
                    <div class="time padding-25">Van {{ $activity->startTime }} tot {{ $activity->endTime }}</div>

                    <div class="participants">{{ $activity->minParticipants }} - {{ $activity->maxParticipants }}
                        Deelnemers
                    </div>
                    <div class="current-participants padding-25">6 Ingeschreven deelnemers</div>

                    <div class="price">{{ $activity->price }}</div>
                </div>

                <div class="spacer"></div>

                <div class="box">
                    <div class="image"><img src="{{ $activity->image}}" alt="" class="padding-25">
                        <div class="comments border">comments</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <a href="/addActivities">
        <button id="btn" class="btn btn-primary">
            Add activity
        </button>
    </a>

    <script>
        document.querySelectorAll('#accordion-header').forEach(item => {
            item.addEventListener("click", e => {
                let dropdown = e.target.parentElement.children[1];
                if (dropdown.style.maxHeight == "0px") {
                    dropdown.style.maxHeight = dropdown.scrollHeight + 'px';
                    dropdown.style.padding = "20px";
                    e.target.classList.add("headerActive");
                } else {
                    dropdown.style.maxHeight = 0;
                    dropdown.style.padding = "0 20px";
                    e.target.classList.remove("headerActive");
                }
            });
        });
    </script>
@endsection
