@extends('frontEnd.master')
@section('title')
    Tour Details
@endsection
@section('content')
    <div class="row c-mr-0">
        <div class="col-md-12 text-center bg-dark">
            <h2 class="text-white text-capitalize"> 01 Day Tour</h2>
        </div>
    </div>
    <div class="container">
        <div class="row c-mr-0">
            @foreach($dtours as $dtour)
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <img class="pop_tour_img" src="{{ asset($dtour->day_tour_image) }}" alt="">
                    </div>
                    <div class="card-body">
                        <p>{!! $dtour->day_tour_description !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-capitalize">{{ $dtour->day_tour_title }}</h2>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li class="tour_details">Duration: Full day {{ $dtour->day_tour_duration }} Hrs</li>
                            <li class="tour_details">Holiday: {{ $dtour->day_tour_holiday }}</li>
                            <li class="tour_details">Holiday Special: {{ $dtour->day_tour_holiday_special }}</li>
                            <li class="tour_details">Attraction: {{ $dtour->day_tour_attraction }}</li>
                        </ul>
                        <h2 class="text-center"><span class="badge bg-secondary">Full Day {{ $dtour->day_tour_duration }} hrs at</span></h2>
                        <div class="alert alert-secondary text-center" role="alert">
                            {{ $dtour->day_tour_location }}
                        </div>
                        <h5>Tour Schedule: </h5>
                        <span>{!! $dtour->day_tour_schedule !!}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row c-mr-0">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-secondary text-center text-white">
                        <h4>Payment Details</h4>
                    </div>
                    <div class="card-body">
                        @foreach($dtours as $dtour)
                        <div class="alert alert-primary" role="alert">
                            <span>1 Person</span> <span>BDT {{$dtour->day_tour_s_bdt}} TK</span> <span>USD {{$dtour->day_tour_s_d}}$</span>
                        </div>
                        <div class="alert alert-primary" role="alert">
                            <span>2 Person</span> <span>BDT {{$dtour->day_tour_d_bdt}} TK</span> <span>USD {{$dtour->day_tour_d_d}}$</span>
                        </div>
                        <div class="alert alert-primary" role="alert">
                            <span>3 Person</span> <span>BDT {{$dtour->day_tour_t_bdt}} TK</span> <span>USD {{$dtour->day_tour_t_d}}$</span>
                        </div>
                        <div class="alert alert-primary" role="alert">
                            <span>4 Person or more</span> <span>BDT {{$dtour->day_tour_q_bdt}} TK</span> <span>USD {{$dtour->day_tour_q_d}}$</span>
                        </div>
                        @endforeach
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
                        @foreach($dtours as $dtour)
                        <span>{!! $dtour->day_tour_price_inclusion !!}</span>
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
                        @foreach($dtours as $dtour)
                        <span>{!! $dtour->day_tour_ttc !!}</span>
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
