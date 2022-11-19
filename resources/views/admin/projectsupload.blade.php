@extends('admin.layouts.master')

@section('inboxCount')
    {{ $contactData->count() }}
@endsection

@section('main_content')
    <div class="col-6 offset-2 mt-5">
        <form action="{{ route('admin#projectupload') }}" method="post" class="form-control p-5 rounded-5"
            enctype="multipart/form-data">
            @csrf
            <h1 class="fw-bold text-center">Project Upload</h1>

            @if (session('status'))
                <div class="col-8 offset-4 alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <label for="project_name" class="form-label text-muted my-3">Project Name : </label>
            <input type="text" name="projectName" id="project_name"
                class="form-control @error('projectName') is-invalid @enderror">
            @error('projectName')
                <small class="text-danger d-block">{{ $message }}</small>
            @enderror

            <label for="project_image" class="form-label text-muted my-3"> Project Image : </label>
            <input type="file" name="projectImage" id="project_image"
                class="form-control @error('projectImage') is-invalid @enderror">
            @error('projectImage')
                <small class="text-danger d-block">{{ $message }}</small>
            @enderror

            <div class="row mt-5 px-3">
                <button type="submit" class="btn btn-dark text-light col-3 offset-9">Upload<i
                        class="fa-solid fa-upload ms-2"></i></button>
            </div>
        </form>
    </div>
@endsection
