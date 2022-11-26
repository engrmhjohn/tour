@extends('frontEnd.master')
@section('title')
    Ayan Tours | FAQ
@endsection
@section('content')
    <div class="container">
        <div class="row c-mr-0">
            @foreach($faqs as $faq)
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-info">
                        <h4>{{$faq->question}}</h4>
                    </div>
                    <div class="card-body bg-secondary">
                        <span class="text-white">{{$faq->answer}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection


