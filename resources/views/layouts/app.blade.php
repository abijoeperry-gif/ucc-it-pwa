<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UCC IT Portal</title>
    
    <!-- PWA Manifest & Theme Settings -->
    <link rel="manifest" href="/manifest.json">
    <meta name="theme-color" content="#0b3558">
    <link rel="apple-touch-icon" href="/images/icons/icon-192x192.png">

    <!-- Bootstrap CSS & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        :root {
            --ucc-navy: #0b3558;
            --ucc-gold: #c89326;
            --ucc-light-gold: #f8f3e6;
        }

        body {
            background-color: #f7f9fa;
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .navbar-ucc {
            background-color: var(--ucc-navy);
            border-bottom: 3px solid var(--ucc-gold);
        }

        .navbar-ucc .navbar-brand {
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .navbar-ucc .nav-link {
            font-weight: 500;
            color: rgba(255, 255, 255, 0.9);
            margin: 0 4px;
            transition: color 0.2s ease;
        }

        .navbar-ucc .nav-link:hover {
            color: var(--ucc-gold);
        }

        .fab-email {
            position: fixed;
            bottom: 24px;
            right: 24px;
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background-color: var(--ucc-navy);
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 14px rgba(0,0,0,0.25);
            font-size: 22px;
            z-index: 1050;
            text-decoration: none;
            border: 2px solid var(--ucc-gold);
            transition: transform 0.2s ease, background-color 0.2s ease;
        }

        .fab-email:hover {
            background-color: #072239;
            color: var(--ucc-gold);
            transform: scale(1.08);
        }

        .footer-ucc {
            background-color: #ffffff;
            border-top: 1px solid #e9ecef;
            color: #6c757d;
            font-size: 0.875rem;
            margin-top: auto;
        }
    </style>
</head>
<body>

    <!-- Navigation Header -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-ucc shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}">
                <img src="{{ asset('images/ucc-logo.png') }}" 
                     onerror="this.onerror=null; this.src='https://ucc.edu.jm/themes/custom/ucc/logo.png';" 
                     alt="UCC Crest" 
                     height="42" 
                     style="width: auto; object-fit: contain;">
                <span>UCC IT Department</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}"><i class="bi bi-house-door"></i> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('directory') }}"><i class="bi bi-people"></i> Directory</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('courses') }}"><i class="bi bi-book"></i> Courses</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admissions') }}"><i class="bi bi-mortarboard"></i> Admissions</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('social') }}"><i class="bi bi-share"></i> Social Media</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container py-4">
        @yield('content')
    </main>

    <!-- Floating Action Button for HOD Email -->
    <a href="mailto:oosbourne@faculty.ucc.edu.jm?subject=Inquiry%20from%20UCC%20IT%20Student" 
       class="fab-email" 
       title="Email Head of Department">
        <i class="bi bi-envelope-fill"></i>
    </a>

    <!-- Footer -->
    <footer class="footer-ucc py-3 text-center">
        <div class="container">
            <p class="mb-0">&copy; {{ date('Y') }} University Commonwealth Caribbean (UCC) &bull; Department of Information Technology</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Service Worker Registration -->
    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/sw.js')
                    .then(reg => console.log('PWA Service Worker registered:', reg.scope))
                    .catch(err => console.error('PWA Service Worker failed:', err));
            });
        }
    </script>
</body>
</html>