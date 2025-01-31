@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Applicant</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('applicants.update', $applicant->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Name:</label>
            <input type="text" name="name" class="form-control" value="{{ $applicant->name }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" value="{{ $applicant->email }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Phone:</label>
            <input type="text" name="phone" class="form-control" value="{{ $applicant->phone }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Status:</label>
            <select name="status" class="form-control">
                <option {{ $applicant->status == 'Unviewed' ? 'selected' : '' }}>Unviewed</option>
                <option {{ $applicant->status == 'Interviewed' ? 'selected' : '' }}>Interviewed</option>
                <option {{ $applicant->status == 'Hired' ? 'selected' : '' }}>Hired</option>
                <option {{ $applicant->status == 'Onboarding' ? 'selected' : '' }}>Onboarding</option>
                <option {{ $applicant->status == 'Resigned' ? 'selected' : '' }}>Resigned</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('applicants.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
