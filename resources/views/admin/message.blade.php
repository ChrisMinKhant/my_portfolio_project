@extends('admin.layouts.master')

@section('title')
    Kaung Min Khant - Admin Page
@endsection

@section('inboxCount')
    @if ($contactData->count() >= 100)
        +99
    @endif

    {{ $contactData->count() }}
@endsection

@section('main_content')
    <div class="col-10 mt-5">
        <table class="table text-light">
            <thead>
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Message</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contactData as $contacts)
                    <tr>
                        <td scope="row">{{ $contacts->created_at->format('M-d-Y') }}</td>
                        <td>{{ $contacts->name }}</td>
                        <td>{{ $contacts->email }}</td>
                        <td>{{ $contacts->phone }}</td>
                        <td><a href="{{ route('admin#messagedetails',$contacts->id) }}" class="text-decoration-none text-white fw-bold">{{ Str::limit($contacts->message, 20, '...') }}</a></td>
                        <td><a href="{{ route('admin#deletemessage', $contacts->id) }}"
                                class="text-decoration-none text-danger"><i class="fa-solid fa-trash-can"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
