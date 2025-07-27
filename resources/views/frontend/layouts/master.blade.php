<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>TicketEase</title>
    <!-- Bootstrap CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Animate on Scroll CSS -->
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <style>
        body {
        background-image: linear-gradient(rgba(42, 42, 114, 0.85), rgba(42, 42, 114, 0.85)), 
                      url('https://images.unsplash.com/photo-1501281668745-f7f57925c3b4');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        background-repeat: no-repeat;
        min-height: 100vh;
}
    </style>
</head>
<body>

    <!-- Navigation -->
    @include('frontend.layouts.navbar')

<div>
        @yield('content')
</div>

    <!-- Footer -->
    @include('frontend.layouts.footer')

    <!-- Bootstrap JS -->
    <script src="{{asset('css/bootstrap.min.js')}}"></script>
    <!-- Animate on Scroll JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 120
        });
    </script>
</body>
</html>
    