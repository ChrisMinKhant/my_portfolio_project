<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Login Page</title>

    {{-- Bootstrap --}}
    @vite(['resources/js/app.js'])

    {{-- Animation Css Link --}}
    <link rel="stylesheet" href="{{ asset('storage/css/adminstyle.css') }}">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 offset-4">
                <form class="mt-5 shadow-lg p-5 rounded-5" action="{{ route('login') }}" method="post">
                    @csrf
                    <h1 class="text-center mb-3">
                        Sign In Form
                    </h1>

                    @if (session('status'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    <!-- Email input -->
                    <div class="form-floating mb-4">
                        <input type="email" id="form2Example1" class="form-control" placeholder="example@gmail.com"
                            name="email" />
                        <label for="form2Example1" class="text-muted">Email address</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-floating mb-4">
                        <input type="password" id="form2Example2" class="form-control" placeholder="password"
                            name="password" />
                        <label for="form2Example2" class="text-muted">Password</label>
                    </div>

                    {{-- submit button --}}
                    <div class="row">
                        <button type="submit" class="btn btn-dark text-light">Sign In</button>
                    </div>

                    {{-- submit button --}}
                    <div class="row mt-3">
                        <a href="{{ route('admin#registerpage') }}"
                            class="text-decoration-none text-dark fs-6 text-center">Don't Have An Account? <span
                                class="text-primary">Register Here.</span></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
