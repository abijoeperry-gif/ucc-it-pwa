@extends('layouts.app')

@section('content')
<h2 class="mb-4">IT Department Courses</h2>
<div class="row g-3">
    @foreach($courses as $course)
    <div class="col-md-6">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <h5 class="card-title text-primary mb-0">{{ $course->code }}: {{ $course->name }}</h5>
                    <span class="badge bg-secondary">{{ $course->credits }} Credits</span>
                </div>
                <p class="small text-muted mb-2"><strong>Prerequisites:</strong> {{ $course->prerequisites }}</p>
                <p class="card-text text-secondary">{{ $course->description }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection