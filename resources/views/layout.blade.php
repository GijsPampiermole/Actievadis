<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actievadis</title>
</head>
<body>


      <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-lg">
            <div class="container-fluid" style="display:flex;">
                <a class="navbar-brand" href="#">Actievadis</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Mijn inschrijvingen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Accounts</a>
                        </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/inloggen">Inloggen</a>
                            </li>
                    </ul>
                </div>
            </div>
          </div>
      </nav>


    <div class="container-lg">
        @yield('content')
    </div>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</body>
</html>
