@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Applicant List</h2>
    <a href="{{ route('applicants.create') }}" class="btn btn-primary">Add Applicant</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($applicants as $applicant)
            <tr>
                <td>{{ $applicant->name }}</td>
                <td>{{ $applicant->email }}</td>
                <td>{{ $applicant->phone }}</td>
                <td>{{ $applicant->status }}</td>
                <td>
                    <a href="{{ route('applicants.edit', $applicant->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('applicants.destroy', $applicant->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Delete this applicant?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
