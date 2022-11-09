<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- Bootstrap --}}
    @vite(['resources/js/app.js'])

    {{-- Fontawsome Link --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="container-fluid">
        {{-- Nav Bar Open --}}
        <div class="row shadow-sm">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid align-content-center">
                    <span class="navbar-brand text-uppercase fs-1 fw-bold" href="#">kaung min khant</span>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page"
                                    href="{{ route('user#homepage') }}">Home</a>
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
