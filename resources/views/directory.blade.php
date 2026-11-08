@extends('layouts.app')

@section('content')
<h2 class="mb-4">Faculty & Staff Directory</h2>
<div class="row g-4">
    @foreach($staff as $member)
    <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm text-center p-4">
            <img src="{{ $member['photo'] }}" class="rounded-circle mx-auto mb-3" width="90" height="90" alt="{{ $member['name'] }}" style="object-fit: cover;">
            <h5 class="card-title mb-1">{{ $member['name'] }}</h5>
            <p class="text-muted small mb-3">{{ $member['title'] }}</p>
            <div class="d-flex justify-content-center gap-2 mt-auto">
                <a href="tel:{{ $member['phone'] }}" class="btn btn-primary btn-sm px-3">
                    <i class="bi bi-telephone-fill"></i> Call
                </a>
                <a href="mailto:{{ $member['email'] }}" class="btn btn-outline-secondary btn-sm px-3">
                    <i class="bi bi-envelope-fill"></i> Email
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection