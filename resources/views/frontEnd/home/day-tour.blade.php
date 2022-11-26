@extends('frontEnd.master')
@section('title')
    Ayan Tours | Day Tours
@endsection
@section('content')
    <div class="row c-mr-0">
        <div class="col-md-12 text-center bg-dark mb-3">
            <h2 class="text-white">Day Tour Packages</h2>
        </div>
    </div>
    <div class="container">
        <div class="row c-mr-0">
            @foreach($dtours as $dtour)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <img class="pop_tour_img" src="{{ asset($dtour->day_tour_image) }}" alt="">
                        </div>
                        <div class="card-body">
                            <p class="pop_tours_p text-center">1 DAY | {{ $dtour->day_tour_duration }} HOURS</p>
                            <h5 class="text-capitalize">{{$dtour->day_tour_title}}</h5>
                            <a href="{{route('day-tour-details',['day_tour_slug'=>$dtour->day_tour_slug])}}" class="btn btn-info">See Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

