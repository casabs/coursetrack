    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="10" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <span class="fs-4">CourseTrack</span>
            </a>

            <ul class="nav nav-pills active nav-links">
                <li class="nav-item {{ Request::path() == '/' ? 'active' : '' }}">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item {{ Request::is('directory') ? 'active' : '' }}">
                    <a href="/directory" class="nav-link">Directory</a>
                </li>
                <li class="nav-item {{ Request::is('create') ? 'active' : '' }}">
                    <a href="/create" class="nav-link">Student+</a>
                </li>


                <!---
                <li class="nav-item"><a href="/update" class="nav-link">Profile Update</a></li>
                --->
            </ul>
        </header>
    </div>
