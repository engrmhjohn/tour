@extends('admin.master')
@section('title')
    Edit 3 Day Popular Tour
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header bg-info"><h3 class="text-center font-weight-light my-4">Edit 3 Day Popular Tour</h3></div>
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
                        <form action="{{ route('update-popular-tour') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="ptour_id" value="{{ $ptour->id }}">
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="text" name="pt_title" value="{{ $ptour->pt_title }}" placeholder="Enter Tour Title" />
                                        <label for="inputFirstName">Offer Name (e.g Sundarbon Visit)</label>
                                        <input type="hidden" name="pt_slug">
                                    </div>
                                </div>
                            </div>
                            <strong><mark>Day 01 Details</mark></strong>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="text" name="pt_fday_location" value="{{ $ptour->pt_fday_location }}" placeholder="Enter Tour Title" />
                                        <label for="inputFirstName"> Day 01 Tour Location</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputFirstName" type="text" name="pt_fday_duration" value="{{ $ptour->pt_fday_duration }}" placeholder="Enter Author Name" />
                                                <label for="inputFirstName">Day 01 Duration (Hours)</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputFirstName" type="text" name="pt_fday_attraction" value="{{ $ptour->pt_fday_attraction }}" placeholder="Enter Category" />
                                                <label for="inputFirstName">Attraction</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputFirstName" type="text" name="pt_fday_holiday_special" value="{{ $ptour->pt_fday_holiday_special }}" placeholder="Enter Author Name" />
                                                <label for="inputFirstName">Holiday Special</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputFirstName" type="text" name="pt_fday_holiday" value="{{ $ptour->pt_fday_holiday }}" placeholder="Enter Category" />
                                                <label for="inputFirstName">Holiday (Which Day?)</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <label for="inputFirstName">Location's Description</label> <br> <br>
                                            <textarea class="form-control summernote" name="pt_fday_description" id="" cols="30" rows="10">{{ $ptour->pt_fday_description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <label for="inputFirstName">Visit Schedule</label> <br> <br>
                                            <textarea class="form-control summernote" name="pt_fday_schedule" id="" cols="30" rows="10">{{ $ptour->pt_fday_schedule }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputFirstName" type="file" name="pt_fday_image" placeholder="Price" />
                                            <img src="{{asset( $ptour->pt_fday_image )}}" alt="" style="height: 200px; width: 300px;">
                                        </div>
                                    </div>
                                </div>
                                <strong><mark>Day 02 Details</mark></strong>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputFirstName" type="text" name="pt_sday_location" value="{{ $ptour->pt_sday_location }}" placeholder="Enter Tour Title" />
                                            <label for="inputFirstName"> Day 02 Tour Location</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputFirstName" type="text" name="pt_sday_duration" value="{{ $ptour->pt_sday_duration }}" placeholder="Enter Author Name" />
                                                    <label for="inputFirstName">Day 02 Duration (Hours)</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputFirstName" type="text" name="pt_sday_attraction" value="{{ $ptour->pt_sday_attraction }}" placeholder="Enter Category" />
                                                    <label for="inputFirstName">Attraction</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputFirstName" type="text" name="pt_sday_holiday_special" value="{{ $ptour->pt_sday_holiday_special }}" placeholder="Enter Author Name" />
                                                    <label for="inputFirstName">Holiday Special</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputFirstName" type="text" name="pt_sday_holiday" value="{{ $ptour->pt_sday_holiday }}" placeholder="Enter Category" />
                                                    <label for="inputFirstName">Holiday (Which Day?)</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <label for="inputFirstName">Location's Description</label> <br> <br>
                                                <textarea class="form-control summernote" name="pt_sday_description" id="" cols="30" rows="10">{{ $ptour->pt_sday_description }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <label for="inputFirstName">Visit Schedule</label> <br> <br>
                                                <textarea class="form-control summernote" name="pt_sday_schedule" id="" cols="30" rows="10">{{ $ptour->pt_sday_schedule }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputFirstName" type="file" name="pt_sday_image" placeholder="Price" />
                                                <img src="{{asset($ptour->pt_sday_image)}}" alt="" style="height: 200px; width: 300px;">
                                            </div>
                                        </div>
                                    </div>
                                    <strong><mark>Day 03 Details</mark></strong>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputFirstName" type="text" name="pt_tday_location" value="{{ $ptour->pt_tday_location }}" placeholder="Enter Tour Title" />
                                                <label for="inputFirstName"> Day 03 Tour Location</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" name="pt_tday_duration" value="{{ $ptour->pt_tday_duration }}" placeholder="Enter Author Name" />
                                                        <label for="inputFirstName">Day 03 Duration (Hours)</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" name="pt_tday_attraction" value="{{ $ptour->pt_tday_attraction }}" placeholder="Enter Category" />
                                                        <label for="inputFirstName">Attraction</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" name="pt_tday_holiday_special" value="{{ $ptour->pt_tday_holiday_special }}" placeholder="Enter Author Name" />
                                                        <label for="inputFirstName">Holiday Special</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" name="pt_tday_holiday" value="{{ $ptour->pt_tday_holiday }}" placeholder="Enter Category" />
                                                        <label for="inputFirstName">Holiday (Which Day?)</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <label for="inputFirstName">Location's Description</label> <br> <br>
                                                    <textarea class="form-control summernote" name="pt_tday_description" id="" cols="30" rows="10">{{ $ptour->pt_tday_description }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <label for="inputFirstName">Visit Schedule</label> <br> <br>
                                                    <textarea class="form-control summernote" name="pt_tday_schedule" id="" cols="30" rows="10">{{ $ptour->pt_tday_schedule }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputFirstName" type="file" name="pt_tday_image" placeholder="Price" />
                                                    <img src="{{asset($ptour->pt_tday_image)}}" alt="" style="height: 200px; width: 300px;">
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
                                                <input class="form-control" id="inputFirstName" type="text" name="ptsp_bdt" value="{{ $ptour->ptsp_bdt }}" placeholder="Enter Author Name" />
                                                <label for="inputFirstName">Price in BDT</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputFirstName" type="text" name="ptsp_d" value="{{ $ptour->ptsp_d }}" placeholder="Enter Category" />
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
                                                <input class="form-control" id="inputFirstName" type="text" name="ptdp_bdt" value="{{ $ptour->ptdp_bdt }}" placeholder="Enter Author Name" />
                                                <label for="inputFirstName">Price in BDT</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputFirstName" type="text" name="ptdp_d" value="{{ $ptour->ptdp_d }}" placeholder="Enter Category" />
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
                                                <input class="form-control" id="inputFirstName" type="text" name="pttp_bdt" value="{{ $ptour->pttp_bdt }}" placeholder="Enter Author Name" />
                                                <label for="inputFirstName">Price in BDT</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputFirstName" type="text" name="pttp_d" value="{{ $ptour->pttp_d }}" placeholder="Enter Category" />
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
                                                <input class="form-control" id="inputFirstName" type="text" name="ptqp_bdt" value="{{ $ptour->ptqp_bdt }}" placeholder="Enter Author Name" />
                                                <label for="inputFirstName">Price in BDT</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputFirstName" type="text" name="ptqp_d" value="{{ $ptour->ptqp_d }}" placeholder="Enter Category" />
                                                <label for="inputFirstName">Price in Doller</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <label for="inputFirstName">Price Inclusion (What we offer)</label> <br> <br>
                                            <textarea class="form-control summernote" name="pt_price_inclusion" id="" cols="30" rows="10">{{ $ptour->pt_price_inclusion }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <label for="inputFirstName">Things to Carry</label> <br> <br>
                                            <textarea class="form-control summernote" name="pt_t2c" id="" cols="30" rows="10">{{ $ptour->pt_t2c }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 mb-0">
                                    <input class="form-control btn btn-success" type="submit" value="Update This Tour">
                                </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <a class="form-control btn btn-info" href="{{'manage-popular-tour'}}">Go to Manage Tour</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
