@extends('frontEnd.master')
@section('title')
    Ayan Tours | Privacy Policy
@endsection
@section('content')
    <div class="container">
        <div class="row c-mr-0">
            @foreach($pps as $pp)
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-secondary text-white">
                            <span>{!! $pp->ppolicy !!}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection



