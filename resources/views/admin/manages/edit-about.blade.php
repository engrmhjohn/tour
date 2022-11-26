@extends('admin.master')
@section('title')
    Edit About Info
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header bg-info"><h3 class="text-center font-weight-light my-4">Edit About Info</h3></div>
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
                        <form action="{{ route('update-about-info') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $about->id }}" name="about_id">
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <label for="">Description</label> <br> <br>
                                        <textarea class="form-control summernote" name="about" id="" cols="30" rows="10">{{$about->about}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="file" name="about_pic" placeholder="Price" />
                                        <img src="{{asset($about->about_pic)}}" alt="" style="height=200px; width: 300px;">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="mt-4 mb-0">
                                    <input class="form-control btn btn-success" type="submit" value="Update This About Info">
                                </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <a class="form-control btn btn-info" href="{{ route('manage-about-info') }}">Go to Manage About Info</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
