@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add Applicant</h2>
    <form action="{{ route('applicants.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Phone:</label>
            <input type="text" name="phone" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Status:</label>
            <select name="status" class="form-control">
                <option>Unviewed</option>
                <option>Interviewed</option>
                <option>Hired</option>
                <option>Onboarding</option>
                <option>Resigned</option>
            </select>
        </div>
        <button class="btn btn-success">Save</button>
    </form>
</div>
@endsection


