@extends('admin.master')
@section('title')
    Edit 1 Day Tour
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header bg-info"><h3 class="text-center font-weight-light my-4">Edit 1 Day Tour</h3></div>
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
                        <form action="{{route('update-day-tour')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $dtour->id }}" name="dtour_id">
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="text" name="day_tour_title" value="{{ $dtour->day_tour_title }}" placeholder="Enter Tour Title" />
                                        <label for="inputFirstName">Tour Title</label>
                                        <input type="hidden" name="day_tour_slug">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="text" name="day_tour_location" value="{{ $dtour->day_tour_location }}" placeholder="Enter Tour Title" />
                                        <label for="inputFirstName">Tour Location</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputFirstName" type="text" name="day_tour_duration" value="{{ $dtour->day_tour_duration }}" placeholder="Enter Author Name" />
                                                <label for="inputFirstName">Duration (Hours)</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputFirstName" type="text" name="day_tour_attraction" value="{{ $dtour->day_tour_attraction }}" placeholder="Enter Category" />
                                                <label for="inputFirstName">Attraction</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputFirstName" type="text" name="day_tour_holiday_special" value="{{ $dtour->day_tour_holiday_special }}" placeholder="Enter Author Name" />
                                                <label for="inputFirstName">Holiday Special</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputFirstName" type="text" name="day_tour_holiday" value="{{ $dtour->day_tour_holiday }}" placeholder="Enter Category" />
                                                <label for="inputFirstName">Holiday (Which Day?)</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <label for="inputFirstName">Location's Description</label> <br> <br>
                                            <textarea class="form-control summernote" name="day_tour_description" id="" cols="30" rows="10">{{ $dtour->day_tour_description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <label for="inputFirstName">Visit Schedule</label> <br> <br>
                                            <textarea class="form-control summernote" name="day_tour_schedule" id="" cols="30" rows="10">{{ $dtour->day_tour_schedule }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <img src="{{ asset( $dtour->day_tour_image ) }}" alt="" style="height: 200px; width: 300px;">
                                            <input class="form-control" id="inputFirstName" type="file" name="day_tour_image" placeholder="Price" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><strong>Payment Section:</strong></label>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <div class="card-header">
                                                Price for 1 Person
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputFirstName" type="text" name="day_tour_s_bdt" value="{{ $dtour->day_tour_s_bdt }}" placeholder="Enter Author Name" />
                                                <label for="inputFirstName">Price in BDT</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputFirstName" type="text" name="day_tour_s_d" value="{{ $dtour->day_tour_s_d }}" placeholder="Enter Category" />
                                                <label for="inputFirstName">Price in Doller</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card-header">
                                                Price for 2 Persons
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputFirstName" type="text" name="day_tour_d_bdt" value="{{ $dtour->day_tour_d_bdt }}" placeholder="Enter Author Name" />
                                                <label for="inputFirstName">Price in BDT</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputFirstName" type="text" name="day_tour_d_d" value="{{ $dtour->day_tour_d_d }}" placeholder="Enter Category" />
                                                <label for="inputFirstName">Price in Doller</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card-header">
                                                Price for 3 Persons
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputFirstName" type="text" name="day_tour_t_bdt" value="{{ $dtour->day_tour_t_bdt }}" placeholder="Enter Author Name" />
                                                <label for="inputFirstName">Price in BDT</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputFirstName" type="text" name="day_tour_t_d" value="{{ $dtour->day_tour_t_d }}" placeholder="Enter Category" />
                                                <label for="inputFirstName">Price in Doller</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card-header">
                                                Price for 4 or More Persons
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputFirstName" type="text" name="day_tour_q_bdt" value="{{ $dtour->day_tour_q_bdt }}" placeholder="Enter Author Name" />
                                                <label for="inputFirstName">Price in BDT</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputFirstName" type="text" name="day_tour_q_d" value="{{ $dtour->day_tour_q_d }}" placeholder="Enter Category" />
                                                <label for="inputFirstName">Price in Doller</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <label for="inputFirstName">Price Inclusion (What we offer)</label> <br> <br>
                                            <textarea class="form-control summernote" name="day_tour_price_inclusion" id="" cols="30" rows="10">{{ $dtour->day_tour_price_inclusion }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <label for="inputFirstName">Things to Carry</label> <br> <br>
                                            <textarea class="form-control summernote" name="day_tour_ttc" id="" cols="30" rows="10">{{ $dtour->day_tour_ttc }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 mb-0">
                                    <input class="form-control btn btn-success" type="submit" value="Update This Tour">
                                </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <a class="form-control btn btn-info" href="{{ route('manage-day-tour') }}">Go to Manage Tour</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
