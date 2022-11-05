<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- Bootstrap --}}
    @vite(['resources/js/app.js'])

</head>

<body>
    <div class="container-fluid">
        {{-- Nav Bar Open --}}
        <div class="row">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid align-content-center">
                    <span class="navbar-brand text-capitalize fs-1" href="#">kaung min khant</span>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('user#homepage') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user#aboutpage') }}">About Me</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user#projectspage') }}">Projects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user#contactpage') }}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        {{-- Nav Bar Close --}}

        {{-- Main Content Open --}}

            @yield('main_content')

        {{-- Main Content Close --}}
    </div>
</body>
@yield('script_session')

</html>
