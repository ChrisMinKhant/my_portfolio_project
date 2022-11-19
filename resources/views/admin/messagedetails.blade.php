@extends('admin.layouts.master')

@section('inboxCount')
    @if ($contactData->count() >= 100)
        +99
    @endif

    {{ $contactData->count() }}
@endsection

@section('main_content')
    <div class="col-6 offset-2 mt-5">
        <div class="bg-light p-5 rounded-5">
            <p class="fw-bold fs-3">From : {{ $messageDetail->name }}</p>
            <small class="btn btn-sm btn-dark text-light rounded-5"><i
                    class="fa-regular fa-clock me-2"></i>{{ $messageDetail->created_at }}</small>
            <small class="btn btn-sm btn-dark text-light rounded-5"><i
                    class="fa-regular fa-envelope me-2"></i>{{ $messageDetail->email }}</small>
            <small class="btn btn-sm btn-dark text-light rounded-5"><i
                    class="fa-solid fa-phone me-2"></i>{{ $messageDetail->phone }}</small>

            <h3 class="mt-5"><i class="fa-solid fa-circle-info me-2"></i>Details</h3>
            <p class="text-muted">{{ $messageDetail->message }}</p>
        </div>
    </div>
@endsection
