@extends('frontEnd.master')
@section('title')
    Ayan Tours | Privacy Policy
@endsection
@section('content')
    <div class="container">
        <div class="row c-mr-0">
            @foreach($tncs as $tnc)
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-secondary text-white">
                            <span>{!! $tnc->tnc !!}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection




