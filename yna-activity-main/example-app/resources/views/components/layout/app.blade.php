<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">


    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>CourseTrack</title>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

</head>

<body class="d-flex flex-column min-vh-100">
    @include('partials.header')
    <div class="flex-grow-1">
        {{ $slot }}
    </div>
    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <!--navbar-->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var navLinks = document.querySelectorAll('.nav .nav-item .nav-link');
            var currentUrl = window.location.pathname;

            navLinks.forEach(function(link) {
                if (link.getAttribute('href') === currentUrl) {
                    link.classList.add('active');
                    link.setAttribute('aria-current', 'page'); // for accessibility
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function toggleActiveLink(link) {
            // Remove the "active-link" class from all links in the sidebar
            const sidebarLinks = document.querySelectorAll('.nav-link');
            sidebarLinks.forEach((sidebarLink) => {
                sidebarLink.classList.remove('active-link');
            });

            // Add the "active-link" class to the clicked link
            link.classList.add('active-link');
        }
    </script>

    <script>
        function formatMobileNumber(input) {
            let value = input.value;
            if (!value.startsWith('09')) {
                value = '09' + value.slice(2);
            }
            input.value = value.slice(0, 11); // Limiting to 11 digits (including '09')
        }
    </script>

</body>

</html>
