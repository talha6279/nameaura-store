@extends('admin.layout')
@section('content')
<div class="container">
    <div class="row mb-3">
        <div class="col d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Users Queries </h3>

        </div>
    </div>
</div>
<table class="table table-hover table-striped table-responsive my-0 col-12" style="width: 100%; height: 100%;">
      <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Subject</th>
            <th scope="col">Message Details</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($contact as $contacts)
            <tr>
                <td>{{ $contacts->id }}</td>
                <td>{{ $contacts->name }}</td>
                <td>{{ $contacts->email }}</td>
                <td>{{ $contacts->subject }}</td>
                <td>{{ $contacts->messsage }}</td>
                <td>{{ $contacts->created_at }}</td>
                <td>{{ $contacts->updated_at }}</td>

                <td>
                    <a href="{{ route('contact.delete', $contacts->id) }}" class="btn btn-sm btn-danger delete-confirmation" data-id="{{ $contacts->id }}">Ignore Query</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection
