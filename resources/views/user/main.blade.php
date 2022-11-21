@extends('user.layouts.usermaster')

@section('title')
    Portfolio Page - Kaung Min Khant
@endsection

@section('main_content')
    {{-- Home Start --}}
    <div class="row bg-dark justify-content-center align-items-center" style="height: 100vh;" id="HomeSection">
        <div class="webdev_word text-center">
            <h2 class="fs-1">Web Developer?</h2>
        </div>
    </div>
    {{-- Home End --}}

    {{-- About Start --}}
    <div class="row align-items-center" style="height: 100vh;" id="AboutSection">
        <div class="col-4 text-center">
            <img src="{{ asset('storage/image/my_photo_1.jpg') }}" class="rounded-circle w-50">
        </div>
        <div class="col texgt-center">
            <p class="text-uppercase fw-bold mb-2 fs-3 fs-sm-4"><span class="fs-6 fw-light">Hi, I'm</span> kaung min khant,</p>
            <p class="text-uppercase fw-bold fs-3 fs-sm-4"><span class="fs-6 fw-light">a burmese inovative</span> web developer</p>

            {{-- Skills Start --}}
            <div class="row mt-5">
                <p class="fw-bold fs-4">My Skills</p>
                <div class="col-4">
                    <div class="mt-2">
                        <p class="text-muted fs-6 fw-bold">HTML</p>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar"
                                aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0"
                                aria-valuemax="100" style="width: 80%; height: 8px;"></div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <p class="text-muted fs-6 fw-bold">CSS</p>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar"
                                aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0"
                                aria-valuemax="100" style="width: 80%; height: 8px;"></div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <p class="text-muted fs-6 fw-bold">Java Script</p>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar"
                                aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0"
                                aria-valuemax="100" style="width: 70%; height: 8px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mt-2">
                        <p class="text-muted fs-6 fw-bold">Jquery</p>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar"
                                aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0"
                                aria-valuemax="100" style="width: 70%; height: 8px;"></div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <p class="text-muted fs-6 fw-bold">PHP</p>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar"
                                aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0"
                                aria-valuemax="100" style="width: 75%; height: 8px;"></div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <p class="text-muted fs-6 fw-bold">Lavravel</p>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar"
                                aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0"
                                aria-valuemax="100" style="width: 85%; height: 8px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Skills End --}}
        </div>
    </div>
    {{-- About End --}}

    {{-- Projects Start --}}
    <div class="row align-items-center bg-dark" style="height: 100vh;" id="ProjectsSection">
        <div class="col-10 offset-1">
            {{-- Carousel Start --}}
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                <div class="carousel-inner">
                    @foreach ($projectData as $index => $projects)
                        <div class="carousel-item @if ($index == 0) active @endif">
                            <img src="{{ asset('storage/'. $projects->image) }}" class="d-block w-100 rounded-5"
                                style="height: 550px;">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="btn btn-light shadow-lg text-dark fw-bold fs-4">{{ $projects->name }}</h5>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            {{-- Carousel End --}}
            <div class="row text-uppercase mt-3 text-center text-light">
                <div class="col-4">
                    <p>Total Project Delivered</p>
                    <p class="fs-1 fw-bold">{{ $projectData->count() }}<i class="fa-solid fa-flag-checkered ms-2"></i></p>
                </div>
                <div class="col-4">
                    <p>Project In Progress</p>
                    <p class="fs-1 fw-bold">1<i class="fa-solid fa-spinner ms-2"></i></p>
                </div>
                <div class="col-4">
                    <p>Happy Customer</p>
                    <p class="fs-1 fw-bold">+99<i class="fa-regular fa-face-laugh-beam ms-2"></i></p>
                </div>
            </div>
        </div>
    </div>
    {{-- Projects End --}}

    {{-- Contact Start --}}
    <div class="row" style="height: 100vh;" id="ContactSection">
        <div class="col-8 offset-2 mt-3">
            <p class="fs-1 fw-bold text-center">Contact Me</p>
            <form action="{{ route('user#sendmessage') }}" method="POST">
                @csrf

                @if (session('status'))
                    <div class="col-5 offset-7 alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <label for="nameInputBox" class="form-label">Your Name : </label>
                <input type="text" name="userName" id="nameInputBox"
                    class="form-control @error('userName') is-invalid @enderror">
                @error('userName')
                    <small class="text-danger d-block">{{ $message }}</small>
                @enderror

                <label for="emailInputBox" class="form-label mt-3">Your Email : </label>
                <input type="email" name="userEmail" id="emailInputBox"
                    class="form-control @error('userEmail') is-invalid @enderror">
                @error('userEmail')
                    <small class="text-danger d-block">{{ $message }}</small>
                @enderror

                <label for="phoneInputBox" class="form-label mt-3">Your Phone Number : </label>
                <input type="text" name="userPhoneNumber" id="phoneInputBox"
                    class="form-control @error('userPhoneNumber') is-invalid @enderror">
                @error('userPhoneNumber')
                    <small class="text-danger d-block">{{ $message }}</small>
                @enderror

                <label for="messageInputBox" class="form-label mt-3">Your Message : </label>
                <textarea name="userMessage" id="messageInputBox" cols="30" rows="10"
                    class="form-control @error('userMessage') is-invalid @enderror"></textarea>
                @error('userMessage')
                    <small class="text-danger d-block">{{ $message }}</small>
                @enderror

                <button type="submit" class="btn btn-dark text-white rounded-2 mt-2 float-end">Send<i
                        class="fa-regular fa-paper-plane ms-2"></i></button>
            </form>
        </div>
    </div>
    {{-- Contact End --}}
@endsection
