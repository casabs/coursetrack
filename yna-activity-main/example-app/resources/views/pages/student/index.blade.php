<x-layout.app>
    @section('header')
        @include('partials.header')
    @endsection
    <div class="container d-flex justify-content-center align-items-center">
        <div class="intro-content jumbotron text-center">
            <h1 class="display-1">Welcome to CourseTrack!</h1>
            <p class="lead">Solution for managing courses effectively and efficiently.</p>
            <a href="/create" class="btn btn-violet btn-lg m-4">Get Started</a>
        </div>
    </div>
    <div class="violet-semi-circle">
        <!-- Your violet semi-circle design goes here -->
    </div>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary">
        <div class="col-md-6 p-lg-5 mx-auto my-5">
            <h1 class="display-3 fw-bold">Designed for everyone.</h1>
            <h3 class="lead text-muted mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                viverra, tortor at pharetra pharetra, dolor arcu tincidunt quam, eu tristique neque mi non metus.</h3>
            <div class="d-flex gap-3 justify-content-center lead fw-normal">
                <a class="icon-link" href="/directory">
                    View Directory
                    <svg class="bi">
                        <use xlink:href="#chevron-right"></use>
                    </svg>
                </a>
                <a class="icon-link" href="/create">
                    View Student+
                    <svg class="bi">
                        <use xlink:href="#chevron-right"></use>
                    </svg>
                </a>
            </div>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

</x-layout.app>
