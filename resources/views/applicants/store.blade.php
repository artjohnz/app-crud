@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Applicant Added Successfully!</h2>
    <p>The applicant has been added to the system.</p>
    <a href="{{ route('applicants.index') }}" class="btn btn-primary">Back to Applicant List</a>
</div>
@endsection