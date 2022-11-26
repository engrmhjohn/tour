@extends('admin.master')
@section('title')
    Edit Frequently Asked Question Info
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header bg-info"><h3 class="text-center font-weight-light my-4">Edit Frequently Asked Question Info</h3></div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <span><mark>*All fields are required, if you skip one all info will be erased*</mark></span>
                        <form action="{{route('update-faq-info')}}" method="post">
                            @csrf
                            <input type="hidden" value="{{$faq->id}}" name="faq_id">
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="text" name="question" value="{{$faq->question}}" placeholder="Enter Tour Title" />
                                        <label for="inputFirstName">Question</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="text" name="answer" value="{{$faq->answer}}" placeholder="Enter Tour Title" />
                                        <label for="inputFirstName">Answer</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="mt-4 mb-0">
                                    <input class="form-control btn btn-success" type="submit" value="Update This Frequently Asked Question Info">
                                </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <a class="form-control btn btn-info" href="{{ route('manage-faq-info') }}">Go to Manage Frequently Asked Question Info</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
