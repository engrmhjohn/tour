@extends('frontEnd.master')
@section('title')
    Ayan Tours | Contact US
@endsection
@section('content')
<div class="container">
    <div class="row c-mr-0">
        <div class="col-md-12">
            <div class="alert alert-primary text-center" role="alert">
                <h4>If you have any query or suggestion feel free contact us</h4>
            </div>
        </div>
    </div>
    <div class="row c-mr-0">
        @foreach($contacts as $contact)
        <div class="col-md-6">
            <div class="d-flex justify-content-center mb-3" style="background-color: #cfe2ff;">
                <div class="py-3"><i class="fa-solid fa-phone text-black float-start"></i></div>
                <div class="py-2"><h4 >{{$contact->contact_number}}</h4></div>
            </div>
            <div class="d-flex justify-content-center mb-3" style="background-color: #cfe2ff;">
                <div class="py-3"><i class="fa-solid fa-envelope text-black float-start"></i></div>
                <div class="py-2"><h4 >{{$contact->contact_mail}}</h4></div>
            </div>
            
            <img class="contact_img" src="{{asset('frontEndAsset')}}/image/contact.jpg" alt="">
        </div>
        @endforeach
        <div class="col-md-6">
            <form action="" method="post">
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
                    <textarea class="form-control" rows="5" placeholder="Write what to know.."></textarea>
                </div>
                <button type="submit" class="feedback-btn">Send Feedback</button>
            </form>
        </div>
    </div>
    <div class="row c-mr-0 mt-5">
        <div class="col-md-12">
            @foreach($contacts as $contact)
            <div class="map">
                <iframe src="{{$contact->office_map}}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
