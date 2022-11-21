<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Register Page</title>

    {{-- Bootstrap --}}
    @vite(['resources/js/app.js'])

    {{-- Animation Css Link --}}
    <link rel="stylesheet" href="{{ asset('storage/css/adminstyle.css') }}">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 offset-4">
                <form class="mt-5 shadow-lg p-5 rounded-5" action="{{ route('register') }}" method="post">
                    @csrf
                    <h1 class="text-center mb-3">
                        Sign Up Form
                    </h1>
                    <!-- Username input -->
                    <div class="form-floating mb-4">
                        <input type="text" id="formUserName"
                            class="form-control @error('userName') is-invalid @enderror" placeholder="username"
                            name="name" />
                        <label for="formUserName" class="text-muted">Username</label>
                        @error('userName')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Email input -->
                    <div class="form-floating mb-4">
                        <input type="email" id="formEmailAddress"
                            class="form-control @error('emailAddress') is-invalid @enderror"
                            placeholder="example@gmail.com" name="email" />
                        <label for="formEmailAddress" class="text-muted">Email address</label>
                        @error('emailAddress')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Password input -->
                    <div class="form-floating mb-4">
                        <input type="password" id="formPassword"
                            class="form-control @error('password') is-invalid @enderror" placeholder="password"
                            name="password" />
                        <label for="formPassword" class="text-muted">Password</label>
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Password input -->
                    <div class="form-floating mb-4">
                        <input type="password" id="formConfirmPassword"
                            class="form-control @error('confirmPassword') is-invalid @enderror" placeholder="password"
                            name="password_confirmation" />
                        <label for="formConfirmPassword" class="text-muted">Confirm Password</label>
                        @error('confirmPassword')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- submit button --}}
                    <div class="row">
                        <button type="submit" class="btn btn-dark text-light">Register</button>
                    </div>

                    {{-- submit button --}}
                    <div class="row mt-3">
                        <a href="{{ route('admin#loginpage') }}"
                            class="text-decoration-none text-dark fs-6 text-center">Have An Account? <span
                                class="text-primary">Sign In Here.</span></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
