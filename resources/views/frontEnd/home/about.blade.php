@extends('frontEnd.master')
@section('title')
    Ayan Tours | About US
@endsection
@section('content')
    <div class="container">
        <div class="row c-mr-0">
            @foreach($abouts as $about)
            <div class="col-md-12">
                <img class="about_banner" src="{{asset($about->about_pic)}}" alt="">
                <br> <br>
                <p style="text-align: justify;">{!! $about->about !!}</p>
            </div>
            @endforeach
        </div>
    </div>
@endsection


