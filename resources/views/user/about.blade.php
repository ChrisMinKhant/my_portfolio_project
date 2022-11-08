@extends('user.layouts.usermaster')

@section('title')
    About Page - Kaung Min Khant
@endsection

@section('main_content')
        <div class="row align-items-center" style="height: 100vh;">
            <div class="col-6 text-center">
                <img src="{{ asset('storage/image/my_photo_2.jpg') }}" class="rounded-circle w-50">
            </div>
            <div class="col-6 texgt-center">
                <h1 class="text-uppercase fw-bold mb-5"><span class="fs-5">Hi, I'm</span> kaung min khant</h1>
                <h3 class="text-uppercase">burmese inovative <span class="fw-bold">web developer</span></h3>
            </div>
        </div>
@endsection
