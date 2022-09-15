@extends('layout')
@section('content')
    <div class="my-4">
        <h1>
            Welkom terug!
        </h1>
        <form action="/inloggen/send" method="post">
            @csrf
            <div>
                <p class="mb-0">
                    Email:
                </p>
                <input type="email" class="rounded" name="email" />
            </div>
            <div class="mt-2">
                <p class="mb-0">
                    Wachtwoord:
                </p>
                <input type="password" class="rounded" name="password" />
            </div>
            @if (session('error'))
                <p class="text-danger mb-0">
                    {{ session('error') }}
                </p>
            @endif
            <input class="btn btn-primary mt-2" type="submit" value="Inloggen" />
        </form>
    </div>
@endsection
