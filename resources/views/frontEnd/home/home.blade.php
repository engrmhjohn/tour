@extends('frontEnd.master')
@section('title')
    Welcome to Ayan Tours
@endsection
@section('content')
    <section class="slider-home">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    @foreach($sliders as $slider)
                    <img src="{{ asset($slider->f_slider_pic) }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="slide_content bg-info">{{$slider->f_slider_title}}</h1>
                        <p class="slide_content bg-info">{{$slider->f_slider_description}}</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset($slider->s_slider_pic) }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="slide_content bg-info">{{$slider->s_slider_title}}</h1>
                        <p class="slide_content bg-info">{{$slider->s_slider_description}}</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset($slider->t_slider_pic) }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="slide_content bg-info">{{$slider->t_slider_title}}</h1>
                        <p class="slide_content bg-info">{{$slider->t_slider_description}}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev custom-indicator" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- *****end slide-section***** -->
    <!-- *****slogan-section***** -->
    <section class="slogan mt-5">
        <div class="container">
            <div class="row c-mr-0">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Welcome to Ayan Tours..</h2>
                        <p>-----</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row c-mr-0">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header text-center">
                            <img src="{{ asset('frontEndAsset') }}/image/rating.png" alt="">
                        </div>
                        <div class="card-body text-center">
                            <h5>6 YEARS OF TRAVELS</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header text-center">
                            <img src="{{ asset('frontEndAsset') }}/image/safety.png" alt="">
                        </div>
                        <div class="card-body text-center">
                            <h5>COVID GUIDELINE</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header text-center">
                            <img src="{{ asset('frontEndAsset') }}/image/guide.png" alt="">
                        </div>
                        <div class="card-body text-center">
                            <h5>USEFUL TRAVEL TIPS</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- *****END slogan-body-section***** -->
    <!-- *****start popular tour-section***** -->
    <section class="slogan mt-5 tours">
        <div class="container">
            <div class="row c-mr-0">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Popular Tours..</h2>
                        <p>-----</p>
                    </div>
                </div>
            </div>
            <div class="row c-mr-0">
                @foreach($ptours as $ptour)
                <div class="col-md-4 pop_tour">
                    <div class="card">
                        <div class="card-header">
                            <img class="pop_tour_img" src="{{ asset($ptour->pt_fday_image) }}" alt="">
                        </div>
                        <div class="card-body">
                            <p class="pop_tours_p text-center">3 DAYS | 2 NIGHTS</span>
                                <a class="t-d" href="{{route('popular-tour-details',['pt_slug'=>$ptour->pt_slug])}}"><h5 class="text-capitalize">{{$ptour->pt_title}}</h5></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row c-mr-0">
                <div class="col-md-12 text-center mt-3">
                    <a href="{{ route('popular-tour') }}" class="btn btn-success pop_tour_btn">View More Packages</a>
                </div>
            </div>
        </div>
    </section>
    <!-- *****End popular tour-section***** -->
    <!-- *****start day tour-section***** -->
    <section class="slogan mt-5 tours">
        <div class="container">
            <div class="row c-mr-0">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Day Tours..</h2>
                        <p>-----</p>
                    </div>
                </div>
            </div>
            <div class="row c-mr-0">
                @foreach($dtours as $dtour)
                <div class="col-md-4 pop_tour">
                    <div class="card">
                        <div class="card-header">
                            <img class="pop_tour_img" src="{{ asset($dtour->day_tour_image) }}" alt="">
                        </div>
                        <div class="card-body">
                            <p class="pop_tours_p text-center">1 DAY | {{ $dtour->day_tour_duration }} HOURS</p>
                            <a class="t-d" href="{{route('day-tour-details',['day_tour_slug'=>$dtour->day_tour_slug])}}"><h5 class="text-capitalize">{{ $dtour->day_tour_title }}</h5></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row c-mr-0">
                <div class="col-md-12 text-center mt-3">
                    <a href="{{ route('day-tour') }}" class="btn btn-success pop_tour_btn">View More Packages</a>
                </div>
            </div>
        </div>
    </section>
    <section class="tesimonial">
        <div class="container">
            <div class="row c-mr-0 mb-4">
                <div class="col-md-12">
                    <div class="heading mt-5">
                        <h2>Testimonials</h2>
                        <p>-----</p>
                        <p class="heading-description">Here's some feedback from our clients</p>
                    </div>
                </div>
            </div>
            <div class="row c-mr-0">
                    @foreach($clients as $client)
                <div class="col-md-4 col-12">
                    <div class="card testimonial-card">
                        <div class="card-body">
                            <p>{{$client->f_client_feedback}}</p>
                        </div>
                    </div>
                    <h5 class="text-center">{{$client->f_client_name}}</h5>
                    <p class="text-center text-muted">{{$client->f_client_location}}</p>
                </div>

                    <div class="col-md-4 col-12">
                    <div class="card testimonial-card">
                        <div class="card-body">
                            <p>{{$client->s_client_feedback}}</p>
                        </div>
                    </div>
                    <h5 class="text-center">{{$client->s_client_name}}</h5>
                    <p class="text-center text-muted">{{$client->s_client_location}}</p>
                </div>

                    <div class="col-md-4 col-12">
                    <div class="card testimonial-card">
                        <div class="card-body">
                            <p>{{$client->t_client_feedback}}</p>
                        </div>
                    </div>
                    <h5 class="text-center">{{$client->t_client_name}}</h5>
                    <p class="text-center text-muted">{{$client->t_client_location}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
