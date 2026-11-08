@extends('layouts.app')

@section('content')
<style>
    .hero-banner {
        background: linear-gradient(135deg, #0b3558 0%, #154c7d 100%);
        border-radius: 12px;
        padding: 3rem 2.5rem;
        color: white;
        border-bottom: 4px solid var(--ucc-gold);
    }
    .feature-card {
        border: 1px solid #e3e6f0;
        border-radius: 10px;
        background: #ffffff;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .feature-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    }
    .icon-badge {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1rem;
        font-size: 1.5rem;
    }
    .badge-gold {
        background-color: #fdf6e7;
        color: #c89326;
    }
    .badge-navy {
        background-color: #e8f0f8;
        color: #0b3558;
    }
</style>

<!-- Hero Section -->
<div class="hero-banner mb-5 shadow-sm">
    <span class="badge bg-warning text-dark mb-2 px-3 py-1 fw-bold text-uppercase">Student PWA Portal</span>
    <h1 class="display-6 fw-bold mb-2">School of Technology & Mathematics</h1>
    <p class="lead mb-0 text-white-50">
        Your mobile and web gateway for department courses, academic staff contacts, matriculation pathways, and official university announcements.
    </p>
</div>

<!-- Department Quick Nav Cards -->
<div class="row g-4">
    <!-- Staff Directory Card -->
    <div class="col-md-6 col-lg-3">
        <div class="card h-100 feature-card p-4 text-center">
            <div class="icon-badge badge-navy mx-auto">
                <i class="bi bi-person-badge"></i>
            </div>
            <h5 class="fw-bold mb-2">Faculty & Staff</h5>
            <p class="text-muted small mb-3">Direct contact details, roles, emails, and direct phone lines for department personnel.</p>
            <a href="{{ route('directory') }}" class="btn btn-outline-primary btn-sm mt-auto fw-semibold">View Staff</a>
        </div>
    </div>

    <!-- Courses Card -->
    <div class="col-md-6 col-lg-3">
        <div class="card h-100 feature-card p-4 text-center">
            <div class="icon-badge badge-gold mx-auto">
                <i class="bi bi-journal-code"></i>
            </div>
            <h5 class="fw-bold mb-2">Course Offerings</h5>
            <p class="text-muted small mb-3">Explore active core IT subjects, required prerequisites, and credit allocations.</p>
            <a href="{{ route('courses') }}" class="btn btn-outline-warning text-dark btn-sm mt-auto fw-semibold">View Courses</a>
        </div>
    </div>

    <!-- Admissions Card -->
    <div class="col-md-6 col-lg-3">
        <div class="card h-100 feature-card p-4 text-center">
            <div class="icon-badge badge-navy mx-auto">
                <i class="bi bi-mortarboard"></i>
            </div>
            <h5 class="fw-bold mb-2">Admissions</h5>
            <p class="text-muted small mb-3">Review matriculation criteria, transfer qualifications, and start your online application.</p>
            <a href="{{ route('admissions') }}" class="btn btn-outline-primary btn-sm mt-auto fw-semibold">Admissions Info</a>
        </div>
    </div>

    <!-- Social Media Card -->
    <div class="col-md-6 col-lg-3">
        <div class="card h-100 feature-card p-4 text-center">
            <div class="icon-badge badge-gold mx-auto">
                <i class="bi bi-megaphone"></i>
            </div>
            <h5 class="fw-bold mb-2">Official Socials</h5>
            <p class="text-muted small mb-3">Stay updated with real-time news, events, and campus updates on social channels.</p>
            <a href="{{ route('social') }}" class="btn btn-outline-warning text-dark btn-sm mt-auto fw-semibold">Connect</a>
        </div>
    </div>
</div>

<!-- Quick Department Info Notice -->
<div class="alert mt-5 border-0 shadow-sm d-flex align-items-center gap-3 p-3 rounded" style="background-color: #f1f4f9;">
    <i class="bi bi-info-circle-fill fs-3 text-primary"></i>
    <div class="small text-secondary mb-0">
        <strong>Need Assistance?</strong> Use the floating email button on the bottom right of the screen at any time to submit inquiries directly to the Department Head[cite: 3, 6].
    </div>
</div>
@endsection