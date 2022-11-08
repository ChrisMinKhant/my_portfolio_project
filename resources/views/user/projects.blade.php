@extends('user.layouts.usermaster')

@section('title')
    Projects Page - Kaung Min Khant
@endsection

@section('main_content')
    <div class="row align-items-center" style="height: 100vh;">
        <div class="col-10 offset-1">
            {{-- Carousel Start --}}
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('storage/image/my_photo.jpg') }}" class="d-block w-100 rounded-2" style="height: 550px;">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('storage/image/my_photo_2.jpg') }}" class="d-block w-100 rounded-2" style="height: 550px;">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                        </div>
                    </div>
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
            <div class="row text-uppercase mt-3 text-center">
                <div class="col-4">
                    <p>Total Project Delivered</p>
                    <p class="fs-1 fw-bold">9<i class="fa-solid fa-flag-checkered ms-2"></i></p>
                </div>
                <div class="col-4">
                    <p>Project In Progress</p>
                    <p class="fs-1 fw-bold">19<i class="fa-solid fa-spinner ms-2"></i></p>
                </div>
                <div class="col-4">
                    <p>Happy Customer</p>
                    <p class="fs-1 fw-bold">+99<i class="fa-regular fa-face-laugh-beam ms-2"></i></p>
                </div>
            </div>
        </div>
    </div>
@endsection
