@extends('layout')
@section('content')
    <p>Activiteiten</p>

    @if (session('success'))
        <p class="text-success mb-0">
            {{ session('success') }}
        </p>
    @endif
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
                    <div class="description mt-2">
                        <h6 class="fw-bold">
                            Beschrijving:
                        </h6>
                        {{ $activity->description }}
                    </div>
                    <div class="needs mt-2">
                        <h6 class="fw-bold">
                            Benodigdheden:
                        </h6>
                        {{ $activity->needs }}
                    </div>
                    <div class="food padding-25 mt-2">
                        <h6 class="fw-bold">
                            Is er eten?
                        </h6>
                        {{ $activity->food ? 'Ja' : 'Nee' }}
                    </div>

                    <div class="location mt-2">
                        <h6 class="fw-bold">
                            Locatie:
                        </h6>
                        {{ $activity->location }}
                    </div>
                    <div class="time padding-25 mt-2">
                        <h6 class="fw-bold">
                            Datum en tijd:
                        </h6>
                        Van {{ $activity->startTime }} tot {{ $activity->endTime }}
                    </div>

                    <div class="participants mt-2">
                        <h6 class="fw-bold">
                            Minimaal deelnemers:
                        </h6>
                        {{ $activity->minParticipants }}
                        <h6 class="fw-bold">
                            Maximaal deelnemers:
                        </h6>
                        {{ $activity->maxParticipants }}
                    </div>
                    <div class="current-participants padding-25 mt-2">
                        <h6 class="fw-bold">
                            Tot nu toe zijn er:
                        </h6>

                        {{ count(App\Models\ActivitiesRelationship::where('activityId', $activity->id)->get()) }} Ingeschreven deelnemer(s)
                    </div>

                    <div class="price">
                        <h6 class="fw-bold">
                            Prijs:
                        </h6>
                        €{{ $activity->price }}
                    </div>
                    @if(!$userSignings->isEmpty())
                        @foreach($userSignings as $signing)
                            @if($activity->id === $signing->activityId)
                                <form action="/uitschrijven/send" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{ $activity->id }}" name="id" />
                                    <input type="submit" class="btn btn-primary" value="Uitschrijven">
                                </form>
                            @endif
                        @endforeach
                    @else
                        <form action="/inschrijven/send" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $activity->id }}" name="id" />
                            <input type="submit" class="btn btn-primary" value="Inschrijven">
                        </form>
                    @endif
                </div>

                <div class="spacer"></div>

                <div class="box">
                    <div class="image"><img src="{{ $activity->image}}" alt="" class="padding-25">
                        <div class="border comments">
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            CommentsComments
                            Comments
                            CommentsComments
                            Comments
                            Comments
                            Comments
                            Comments
                        </div>
                        <form method="POST" action="/comments/send" class="d-flex">
                            @csrf
                            <input type="hidden" value="{{ $activity->id }}" name="id" />
                            <textarea name="reactie" placeholder="Typ hier iets..." class="border mt-4 h-auto me-4"></textarea>
                            <input type="submit" value="Reageren" class="border mt-4 btn btn-primary w-25">
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <a href="/addActivities">
        <button id="btn" class="btn btn-primary">
            Activiteit toevoegen
        </button>
    </a>

    <script>
        document.querySelectorAll('#accordion-header').forEach(item => {
            item.addEventListener("click", e => {
                let dropdown = e.target.parentElement.children[1];
                if (dropdown.style.maxHeight == "0px") {
                    dropdown.style.maxHeight = dropdown.scrollHeight + 'px';
                    dropdown.style.margin = "20px";
                    e.target.classList.add("headerActive");
                } else {
                    dropdown.style.maxHeight = 0;
                    dropdown.style.margin = "0 20px";
                    e.target.classList.remove("headerActive");
                }
            });
        });
    </script>
@endsection
