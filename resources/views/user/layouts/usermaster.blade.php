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

    {{--Animation Css Link --}}
    <link rel="stylesheet" href="{{ asset('storage/css/animation.css') }}">

    {{-- Responsive CSS Link --}}
    <link rel="stylesheet" href="{{ asset('storage/css/userresponsivestyle.css') }}">

</head>

<body>
    <div class="container-fluid">
        {{-- Nav Bar Open --}}
        <div class="row shadow-sm">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid align-content-center">
                    <a class="navbar-brand text-uppercase fw-bold" href="{{ route('admin#loginpage') }}" id="my_name">kaung min khant</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link fw-bold" aria-current="page"
                                    href="{{ route('user#mainpage') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bold" href="#AboutSection">About Me</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bold" href="#ProjectsSection">Projects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bold" href="#ContactSection">Contact</a>
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

        {{-- Footer Open --}}
        <div class="row bg-dark p-3 text-center footer">
            <p class="fs-6 fw-bold text-light">Copyright : copyright © 2022 by Kaung Min Khant</p>
        </div>
        {{-- Footer Close --}}
    </div>
</body>
@yield('script_session')

</html>
