@extends('layout')
@section('content')
    <h1>
        Alle accounts
    </h1>
    <p>
        Pas hier alle accountgegevens aan
    </p>
    @if (session('success'))
        <p class="text-success mb-0">
            {{ session('success') }}
        </p>
    @endif
    <div class="accordion">
        @foreach($users as $user)
            <div>
                <div class="header accordion-header d-flex">
                    <div class="left">27/01</div>
                    <div class="middle">{{ $user->name }}</div>
                    <div class="end">
                        <svg class="svg-icon svg-dropdown"
                             style="width: 1em; height: 1em;vertical-align: middle;fill: currentColor;overflow: hidden;"
                             viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M133.404444 349.108148l365.131852 352.616296c1.232593 1.137778 2.56 2.085926 3.982222 2.939259 7.205926 4.361481 16.592593 3.508148 22.945185-2.56l365.131852-352.616296c7.68-7.395556 7.774815-19.816296 0-27.306667-7.395556-7.205926-19.342222-6.826667-26.737778 0.379259l-351.762963 339.626667c0 0 0 0-0.094815 0L160.047407 322.180741c-7.395556-7.205926-19.342222-7.49037-26.737778-0.379259C125.62963 329.291852 125.724444 341.712593 133.404444 349.108148z"/>
                        </svg>
                    </div>
                </div>
                <div class="content" style="max-height: 0px;">
                    <form class="w-25" method="POST" action="/admin/accounts/update">
                        @csrf
                        <input name="id" type="hidden" value="{{ $user->id }}"/>
                        <div class="mb-4">
                            <p class="mb-0">
                                Naam:
                            </p>
                            <input class="form-control" name="name" type="text" value="{{ $user->name }}"/>
                        </div>
                        <div class="mb-4">
                            <p class="mb-0">
                                Email:
                            </p>
                            <input class="form-control" name="email" type="text" value="{{ $user->email }}"/>
                        </div>
                        <div class="mb-4">
                            <p class="mb-0">
                                Admin?
                            </p>
                            <input name="admin" type="checkbox" {{ !$user->isAdmin ?: 'checked' }}/>
                        </div>
                        <div class="mb-4">
                            <input class="btn btn-primary" type="submit" value="Updaten"/>
                        </div>
                    </form>
                    <form class="w-25 d-flex align-items-end" method="POST" action="/admin/accounts/delete">
                        @csrf
                        <input name="id" type="hidden" value="{{ $user->id }}"/>
                        <input class="btn btn-danger" type="submit" value="Verwijderen"/>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
    <script>
        const accordion = document.getElementsByClassName('accordion-header')

        for (let i = 0; i < accordion.length; i++) {
            accordion[i].addEventListener("click", () => {
                let dropdown = accordion[i].parentElement.getElementsByClassName('content')

                for (let x = 0; x < dropdown.length; x++) {
                    if (dropdown[x].style.maxHeight == "0px") {
                        dropdown[x].style.maxHeight = dropdown[x].scrollHeight + 'px';
                        dropdown[x].style.margin = "20px";
                        accordion[i].classList.add("headerActive");
                    } else {
                        dropdown[x].style.maxHeight = 0;
                        dropdown[x].style.margin = "0 20px";
                        accordion[i].classList.remove("headerActive");
                    }
                }
            })
        }
    </script>
@endsection
