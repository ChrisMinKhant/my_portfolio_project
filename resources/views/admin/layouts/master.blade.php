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

    {{-- css link --}}
    <link rel="stylesheet" href="{{ asset('storage/css/adminstyle.css') }}">

</head>

<body>
    <div class="container-fluid">
        {{-- Header Open --}}
        <div class="row shadow-sm text-center">
            <p class="fs-1 fw-bold text-uppercase mt-3">Kaung Min Khant - <span class="text-primary">Admin
                    Dashboard</span></p>
        </div>
        {{-- Header Close --}}
        {{-- Nav Bar Open --}}
        <div class="row bg-dark" style="height: 100vh;">
            {{-- Nav Bar Open --}}
            <div class="col-2 mt-3">
                <nav class="nav flex-column px-4">
                    <a class="btn btn-light text-dark rounded-3 position-relative my-5" href="{{ route('admin#messagepannel') }}">
                        <i class="fa-solid fa-inbox me-2"></i>Inbox
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            @yield('inboxCount')
                        </span>
                    </a>
                    <a class="nav-link text-decoration-none btn btn-light text-dark rounded-3" href="{{ route('admin#projectsuploadpage') }}"><i
                            class="fa-solid fa-arrow-up-from-bracket me-2"></i>Project Upload</a>
                </nav>
            </div>
            {{-- Nav Bar Close --}}

            {{-- Content Open --}}
            @yield('main_content')
            {{-- Content Close --}}
        </div>
    </div>
</body>
@yield('script_session')

</html>
