@extends('user.layouts.usermaster')

@section('title')
    Contact Page - Kaung Min Khant
@endsection

@section('main_content')
    <div class="row" style="height: 100vh;">
        <div class="col-8 offset-2 mt-3">
            <p class="fs-1 fw-bold text-center">Contact Me</p>
            <form action="{{ route('user#sendmessage') }}" method="POST">
                @csrf
                <label for="nameInputBox" class="form-label">Your Name : </label>
                <input type="text" name="userName" id="nameInputBox" class="form-control @error('userName') is-invalid @enderror">
                @error('userName')
                    <small class="text-danger d-block">{{ $message }}</small>
                @enderror

                <label for="emailInputBox" class="form-label mt-3">Your Email : </label>
                <input type="email" name="userEmail" id="emailInputBox" class="form-control @error('userEmail') is-invalid @enderror">
                @error('userEmail')
                    <small class="text-danger d-block">{{ $message }}</small>
                @enderror

                <label for="phoneInputBox" class="form-label mt-3">Your Phone Number : </label>
                <input type="text" name="userPhoneNumber" id="phoneInputBox" class="form-control @error('userPhoneNumber') is-invalid @enderror">
                @error('userPhoneNumber')
                    <small class="text-danger d-block">{{ $message }}</small>
                @enderror

                <label for="messageInputBox" class="form-label mt-3">Your Message : </label>
                <textarea name="userMessage" id="messageInputBox" cols="30" rows="10" class="form-control @error('userMessage') is-invalid @enderror"></textarea>
                @error('userMessage')
                    <small class="text-danger d-block">{{ $message }}</small>
                @enderror

                <button type="submit" class="btn btn-dark text-white rounded-2 mt-2 float-end">Send<i class="fa-regular fa-paper-plane ms-2"></i></button>
            </form>
        </div>
    </div>
@endsection
