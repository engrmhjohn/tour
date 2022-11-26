@extends('admin.master')
@section('title')
    Edit Client Testimonial
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header bg-info"><h3 class="text-center font-weight-light my-4">Edit Client Testimonial</h3></div>
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
                            <form action="{{ route('update-client-info') }}" method="post">
                                @csrf
                                <input type="hidden" value="{{ $client->id }}" name="client_id">
                                <strong><mark>Client 01</mark></strong>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputFirstName" type="text" name="f_client_name" value="{{ $client->f_client_name }}" placeholder="Enter Tour Title" />
                                            <label for="inputFirstName">Client Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputFirstName" type="text" name="f_client_location" value="{{ $client->f_client_location }}" placeholder="Enter Tour Title" />
                                            <label for="inputFirstName">Client Location</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <label for="inputFirstName">Client's Feedback</label> <br>
                                            <textarea class="form-control" name="f_client_feedback" id="" cols="30" rows="10">{{ $client->f_client_feedback }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <strong><mark>Client 02</mark></strong>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputFirstName" type="text" name="s_client_name" value="{{ $client->s_client_name }}" placeholder="Enter Tour Title" />
                                            <label for="inputFirstName">Client Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputFirstName" type="text" name="s_client_location" value="{{ $client->s_client_location }}"  placeholder="Enter Tour Title" />
                                            <label for="inputFirstName">Client Location</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <label for="inputFirstName">Client's Feedback</label><br>
                                            <textarea class="form-control" name="s_client_feedback" id="" cols="30" rows="10">{{ $client->s_client_feedback }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <strong><mark>Client 03</mark></strong>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputFirstName" type="text" name="t_client_name" value="{{ $client->t_client_name }}" placeholder="Enter Tour Title" />
                                            <label for="inputFirstName">Client Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputFirstName" type="text" name="t_client_location" value="{{ $client->t_client_location }}" placeholder="Enter Tour Title" />
                                            <label for="inputFirstName">Client Location</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <label for="inputFirstName">Client's Feedback</label><br>
                                            <textarea class="form-control" name="t_client_feedback" id="" cols="30" rows="10">{{ $client->t_client_feedback }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="mt-4 mb-0">
                                        <input class="form-control btn btn-success" type="submit" value="Update This Client Info">
                                    </div>
                            </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <a class="form-control btn btn-info" href="{{ route('manage-client-info') }}">Go to Manage Client Info</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
