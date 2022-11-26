@extends('admin.master')
@section('title')
    Edit Contact Info
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header bg-info"><h3 class="text-center font-weight-light my-4">Edit Contact Info</h3></div>
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
                        <form action="{{route('update-contact-info')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $contact->id }}" name="contact_id">
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="text" name="contact_mail" value="{{ $contact->contact_mail }}" placeholder="Enter Tour Title" />
                                        <label for="inputFirstName">Contact Mail</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="text" name="contact_number" value="{{ $contact->contact_number }}" placeholder="Enter Tour Title" />
                                        <label for="inputFirstName">Contact Number</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="text" name="ytlink" value="{{ $contact->ytlink }}" placeholder="Enter Tour Title" />
                                        <label for="inputFirstName">Youtube Link</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="text" name="fblink" value="{{ $contact->fblink }}" placeholder="Enter Tour Title" />
                                        <label for="inputFirstName">Facebook Link</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="text" name="twitlink" value="{{ $contact->twitlink }}" placeholder="Enter Tour Title" />
                                        <label for="inputFirstName">Twitter Link</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="text" name="instalink" value="{{ $contact->instalink }}" placeholder="Enter Tour Title" />
                                        <label for="inputFirstName">Instagram Link</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="text" name="office_location" value="{{ $contact->office_location }} placeholder="Enter Tour Title" />
                                        <label for="inputFirstName">Office Location</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="text" name="office_map" value="{{ $contact->office_map }} placeholder="Enter Tour Title" />
                                        <label for="inputFirstName">Office Map Link</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="mt-4 mb-0">
                                    <input class="form-control btn btn-success" type="submit" value="Update This Contact Info">
                                </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <a class="form-control btn btn-info" href="{{route('manage-contact-info') }}">Go to Manage Contact Info</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
