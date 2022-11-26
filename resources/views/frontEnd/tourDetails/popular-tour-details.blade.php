@extends('frontEnd.master')
@section('title')
    Popular Tour Details
@endsection
@section('content')
    <div class="row c-mr-0">
        <div class="col-md-12 text-center bg-dark">
            <h2 class="text-white text-capitalize"> 03 Day Tour</h2>
        </div>
    </div>
    <div class="container">
        @foreach($ptours as $ptour)
        <div class="row c-mr-0">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <img class="pop_tour_img" src="{{asset($ptour->pt_fday_image)}}" alt="">
                    </div>
                    <div class="card-body">
                        <p>{!! $ptour->pt_fday_description !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-capitalize">{{ $ptour->pt_title }}</h2>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li class="tour_details">Day 01 - Duration: {{ $ptour->pt_fday_duration }} Hrs</li>
                            <li class="tour_details">Holiday: {{ $ptour->pt_fday_holiday }}</li>
                            <li class="tour_details">Holiday Special: {{ $ptour->pt_fday_holiday_special }}</li>
                            <li class="tour_details">Attraction: {{ $ptour->pt_fday_attraction }}</li>
                        </ul>
                        <h2 class="text-center"><span class="badge bg-secondary">Day 01 at</span></h2>
                        <div class="alert alert-secondary text-center" role="alert">
                            {{ $ptour->pt_fday_location }}
                        </div>
                        <h5>Tour Schedule: </h5>
                        <span>{!! $ptour->pt_fday_schedule !!}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row c-mr-0">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-capitalize">{{ $ptour->pt_title }}</h2>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li class="tour_details">Day 02 - Duration: {{ $ptour->pt_sday_duration }} Hrs</li>
                            <li class="tour_details">Holiday: {{ $ptour->pt_sday_holiday }}</li>
                            <li class="tour_details">Holiday Special: {{ $ptour->pt_sday_holiday_special }}</li>
                            <li class="tour_details">Attraction: {{ $ptour->pt_sday_attraction }}</li>
                        </ul>
                        <h2 class="text-center"><span class="badge bg-secondary">Day 02 at</span></h2>
                        <div class="alert alert-secondary text-center" role="alert">
                            {{ $ptour->pt_sday_location }}
                        </div>
                        <h5>Tour Schedule: </h5>
                        <span>{!! $ptour->pt_sday_schedule !!}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <img class="pop_tour_img" src="{{asset($ptour->pt_sday_image)}}" alt="">
                    </div>
                    <div class="card-body">
                        <p>{!! $ptour->pt_sday_description !!}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row c-mr-0">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <img class="pop_tour_img" src="{{asset($ptour->pt_tday_image)}}" alt="">
                    </div>
                    <div class="card-body">
                        <p>{!! $ptour->pt_tday_description !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-capitalize">{{ $ptour->pt_title }}</h2>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li class="tour_details">Day 03 - Duration: {{ $ptour->pt_tday_duration }} Hrs</li>
                            <li class="tour_details">Holiday: {{ $ptour->pt_tday_holiday }}</li>
                            <li class="tour_details">Holiday Special: {{ $ptour->pt_tday_holiday_special }}</li>
                            <li class="tour_details">Attraction: {{ $ptour->pt_tday_attraction }}</li>
                        </ul>
                        <h2 class="text-center"><span class="badge bg-secondary">Day 03 at</span></h2>
                        <div class="alert alert-secondary text-center" role="alert">
                            {{ $ptour->pt_tday_location }}
                        </div>
                        <h5>Tour Schedule: </h5>
                        <span>{!! $ptour->pt_tday_schedule !!}</span>
                    </div>
                </div>
            </div>
        </divt
            @endforeach


        <div class="row c-mr-0">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-secondary text-center text-white">
                        <h4>Payment Details</h4>
                    </div>
                    <div class="card-body">
                        @foreach($payments as $payment)
                            <div>
                                <h4>We accept below methods:</h4>
                                <img class="payment_img" src="{{asset($payment->bkash_pic)}}" alt="">
                                <img class="payment_img" src="{{asset($payment->nagad_pic)}}" alt="">
                                <img class="payment_img" src="{{asset($payment->rocket_pic)}}" alt="">
                                <img class="payment_img" src="{{asset($payment->bank_acc_pic)}}" alt="">
                            </div>

                                <h5 class="payment_num">{{$payment->bkash_number}} <span class="badge bg-secondary">Bkash</span></h5>
                                <h5 class="payment_num">{{$payment->nagad_number}} <span class="badge bg-success">Nagad</span></h5>
                                <h5 class="payment_num">{{$payment->rocket_number}} <span class="badge bg-info">Rocket</span></h5>
                                <h5 class="payment_num">{{$payment->bank_acc_number}} <span class="badge bg-primary">Bank</span></h5>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-secondary text-center text-white">
                        <h4>Price Inclusion</h4>
                    </div>
                    <div class="card-body">
                        @foreach($ptours as $ptour)
                            <span>{!! $ptour->pt_price_inclusion !!}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row c-mr-0">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-secondary text-center text-white">
                        <h4>Things to Carry</h4>
                    </div>
                    <div class="card-body">
                        @foreach($ptours as $ptour)
                            <span>{!! $ptour->pt_t2c !!}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-info text-center text-white">
                        <h4>Query for Customize Tour</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Your Full Name">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Your Country/District">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Your Whatsapp/Contact No">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control t-resize" rows="10" placeholder="Write what to know.."></textarea>
                            </div>
                            <button type="submit" class="feedback-btn">Send Query</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
