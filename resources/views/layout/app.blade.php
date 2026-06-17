<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'DIGI-ICONICS | Premium Digital Agency')</title>

    <!-- Google Fonts (Plus Jakarta Sans for Premium Tech Look) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Custom Theme Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <style>
        /* Core Variable Setup if not loaded globally */
        :root {
            --primary: #2563eb;
            --secondary: #0f172a;
            --white: #ffffff;
            --text-light: #94a3b8;
            --font-heading: 'Plus Jakarta Sans', sans-serif;
            --font-body: 'Inter', sans-serif;
        }
        body {
            background-color: var(--secondary);
            color: var(--white);
            font-family: var(--font-body);
            overflow-x: hidden;
        }
    </style>
</head>
<body>

    <!-- 01 PREMIUM NAVBAR -->
    @include('partials.navbar')

    <!-- MAIN DYNAMIC CONTENT ROUTER -->
    <main>
        @yield('content')
    </main>

    <!-- 02 PREMIUM FOOTER -->
    @include('partials.footer')

    <!-- ==========================================================================
       JAVASCRIPT CORE ENGINES & PLUGINS
       ========================================================================== -->
    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- GSAP (GreenSock Animation Platform) Core Engine for Floating Effects -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <!-- Custom JS Animation Script -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
