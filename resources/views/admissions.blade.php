@extends('layouts.app')

@section('content')
<style>
    .admissions-card {
        border: 1px solid #e3e6f0;
        border-radius: 12px;
        background-color: #ffffff;
    }
    .admission-item {
        border-left: 4px solid var(--ucc-gold);
        background-color: #fdfdfd;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .admission-item:hover {
        transform: translateX(4px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }
    .badge-ucc {
        background-color: var(--ucc-navy);
        color: #ffffff;
    }
</style>

<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card admissions-card shadow-sm p-4 p-md-5">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                <h2 class="fw-bold mb-0" style="color: var(--ucc-navy);">Department Admissions</h2>
                <span class="badge badge-ucc px-3 py-2 fs-6">BSc Information Technology</span>
            </div>
            
            <p class="text-secondary mb-4">
                Explore our matriculation pathways, standard academic prerequisites, alternative options, and merit-based entrance scholarships for prospective IT students.
            </p>

            <hr class="mb-4">

            <div class="d-flex flex-column gap-3 mb-4">
                <!-- Standard Entry -->
                <div class="p-3 rounded border admission-item">
                    <p class="mb-0">
                        <strong class="text-dark">Standard Entry:</strong> 5 GCE/CSEC subjects (Grades A–C or 1–3) including mandatory Mathematics and English Language.
                    </p>
                </div>

                <!-- Alternative & Mature Entry -->
                <div class="p-3 rounded border admission-item">
                    <p class="mb-0">
                        <strong class="text-dark">Alternative &amp; Mature Entry:</strong> Conditional admission allows 4 subjects with UCC replacement courses, while mature entry (25+ with 5 years experience) requires work history and references.
                    </p>
                </div>

                <!-- Honours Programme -->
                <div class="p-3 rounded border admission-item">
                    <p class="mb-0">
                        <strong class="text-dark">Honours Programme:</strong> 8 subjects with Grade 1s in Math and English qualify for a 25% first-year tuition waiver.
                    </p>
                </div>
            </div>

            <!-- Apply Button -->
            <div class="pt-2">
                <a href="https://ucc.edu.jm/apply" target="_blank" rel="noopener noreferrer" class="btn text-white fw-bold px-4 py-2" style="background-color: var(--ucc-navy);">
                    Proceed to UCC Online Application <i class="bi bi-box-arrow-up-right ms-1"></i>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection