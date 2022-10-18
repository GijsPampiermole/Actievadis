@extends('layout')
@section('content')
    <h1>
        Account
    </h1>
    <p>
        Pas hier uw accountgegevens aan
    </p>
    @if (session('success'))
        <p class="text-success mb-0">
            {{ session('success') }}
        </p>
    @endif
    <form class="w-25" method="POST" action="/account/update">
        @csrf
        <div class="mb-4">
            <p class="mb-0">
                Naam:
            </p>
            <input class="form-control" name="name" type="text" value="{{ $user->name }}" />
        </div>
        <div class="mb-4">
            <p class="mb-0">
                Email:
            </p>
            <input class="form-control" name="email" type="text" value="{{ $user->email }}" />
        </div>
        <div class="mb-4">
            <input class="btn btn-primary" type="submit" value="Updaten" />
        </div>
    </form>
@endsection
