<section class="hero-menu sticky-top">
    <div class="container">
        <div class="row c-mr-0 mb-3">
            <div class="col-md-3 col-9 mt-2">
                <a class="navbar-brand logo" href="{{ route('/') }}">
                    @foreach($logos as $logo)
                    <img class="img-fluid" src="{{ asset($logo->logo) }}" alt="Ayan Tours" style="height: 60px;">
                    @endforeach
                </a>
            </div>
            <div class="col-md-9 col-3 mt-2">
                <nav class="navbar navbar-expand-lg ">
                    <button class="navbar-toggler tog-menu" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ms-auto mob_menu tab_menu">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('/') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('about') }}">About Us</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Tour Packages
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="{{ route('popular-tour') }}">Popular Tours</a></li>
                                    <li><a class="dropdown-item" href="{{ route('day-tour') }}">1 Day Tour</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('contact-us') }}">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Admin Panel</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>
