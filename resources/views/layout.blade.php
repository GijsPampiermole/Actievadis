<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actievadis</title>
</head>
<body>
@if(\Illuminate\Support\Facades\Auth::check())
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-lg">
            <div class="container-fluid" style="display:flex;">
                <a class="navbar-brand" href="/">Actievadis</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/inschrijvingen">Mijn inschrijvingen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/account">Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/uitloggen">Uitloggen</a>
                        </li>
                        @if(\Illuminate\Support\Facades\Auth::user()->isAdmin)
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/accounts">Accounts beheren</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </nav>
@endif
<div class="container-lg"  style="padding-top: 20px">
    @yield('content')
</div>
@vite(['resources/css/app.scss', 'resources/js/app.js'])
</body>
</html>
