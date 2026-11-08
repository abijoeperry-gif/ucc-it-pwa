@extends('layouts.app')

@section('content')
<h2 class="mb-4">Official Social Media</h2>
<div class="row g-4">
    <div class="col-md-4">
        <div class="card h-100 shadow-sm p-4 text-center">
            <i class="bi bi-facebook fs-1 text-primary mb-2"></i>
            <h5>Facebook</h5>
            <p class="small text-muted">Campus events, live streams, and department notices.</p>
            <a href="https://www.facebook.com/uccjamaica/" target="_blank" class="btn btn-outline-primary btn-sm mt-auto">Visit UCC Facebook</a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card h-100 shadow-sm p-4 text-center">
            <i class="bi bi-twitter-x fs-1 text-dark mb-2"></i>
            <h5>X (Twitter)</h5>
            <p class="small text-muted">Real-time alerts, campus news, and advisories.</p>
            <a href="https://twitter.com/uccjamaica" target="_blank" class="btn btn-outline-dark btn-sm mt-auto">Visit UCC X</a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card h-100 shadow-sm p-4 text-center">
            <i class="bi bi-instagram fs-1 text-danger mb-2"></i>
            <h5>Instagram</h5>
            <p class="small text-muted">Photos, campus culture, and student activities.</p>
            <a href="https://www.instagram.com/uccjamaica/" target="_blank" class="btn btn-outline-danger btn-sm mt-auto">Visit UCC Instagram</a>
        </div>
    </div>
</div>
@endsection