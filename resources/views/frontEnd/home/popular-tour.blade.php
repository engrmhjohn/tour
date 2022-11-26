@extends('frontEnd.master')
@section('title')
    Ayan Tours | Popular Tours
@endsection
@section('content')
    <div class="row c-mr-0">
        <div class="col-md-12 text-center bg-dark mb-3">
            <h2 class="text-white">Best Tour Packages</h2>
        </div>
    </div>
    <div class="container">
        <div class="row c-mr-0">
            @foreach($ptours as $ptour)
            <div class="col-md-4 col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <img class="pop_tour_img" src="{{ asset($ptour->pt_fday_image) }}" alt="">
                    </div>
                    <div class="card-body">
                        <p class="pop_tours_p text-center">3 DAYS | 2 NIGHTS</p>
                        <h5 class="text-capitalize">{{$ptour->pt_title}}</h5>
                        <a href="{{route('popular-tour-details',['pt_slug'=>$ptour->pt_slug])}}" class="btn btn-info">See Details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
