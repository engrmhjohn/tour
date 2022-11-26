@extends('admin.master')
@section('title')
    Edit Slider Info
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header bg-info"><h3 class="text-center font-weight-light my-4">Edit Slider Info</h3></div>
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
                        <form action="{{ route('update-slider-info') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $slider->id }}" name="slider_id">
                            <strong><mark>Slider 01</mark></strong>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="text" name="f_slider_title" value="{{$slider->f_slider_title }}" placeholder="Enter Tour Title" />
                                        <label for="inputFirstName">Slider Title</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="text" name="f_slider_description" value="{{$slider->f_slider_description }}" placeholder="Enter Tour Title" />
                                        <label for="inputFirstName">Slider Short Description</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="file" name="f_slider_pic" placeholder="Price" />
                                        <img src="{{ asset($slider->f_slider_pic) }}" alt="" style="height: 200px; width: 300px;">
                                    </div>
                                </div>
                            </div>
                            <strong><mark>Slider 02</mark></strong>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="text" name="s_slider_title" value="{{$slider->s_slider_title }}" placeholder="Enter Tour Title" />
                                        <label for="inputFirstName">Slider Title</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="text" name="s_slider_description" value="{{$slider->s_slider_description }}" placeholder="Enter Tour Title" />
                                        <label for="inputFirstName">Slider Short Description</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="file" name="s_slider_pic" placeholder="Price" />
                                        <img src="{{ asset($slider->s_slider_pic) }}" alt="" style="height: 200px; width: 300px;">
                                    </
                                    </div>
                                </div>
                            </div>
                            <strong><mark>Slider 03</mark></strong>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="text" name="t_slider_title" value="{{$slider->t_slider_title }}" placeholder="Enter Tour Title" />
                                        <label for="inputFirstName">Slider Title</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="text" name="t_slider_description" value="{{$slider->t_slider_description }}" placeholder="Enter Tour Title" />
                                        <label for="inputFirstName">Slider Short Description</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="file" name="t_slider_pic" placeholder="Price" />
                                        <img src="{{ asset($slider->t_slider_pic) }}" alt="" style="height: 200px; width: 300px;">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="mt-4 mb-0">
                                    <input class="form-control btn btn-success" type="submit" value="Update This Slider Info">
                                </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <a class="form-control btn btn-info" href="{{route('manage-slider-info')}}">Go to Manage Slider Info</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
