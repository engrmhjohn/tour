@extends('admin.master')
@section('title')
    Edit Payment Info
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header bg-info"><h3 class="text-center font-weight-light my-4">Edit Payment Info</h3></div>
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
                        <form action="{{ route('update-payment-info') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{$payment->id}}" name="payment_id">
                            <strong><mark>Bkash</mark></strong>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="text" name="bkash_number" value="{{ $payment->bkash_number }}" placeholder="Enter Tour Title" />
                                        <label for="inputFirstName">Bkash Number</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="file" name="bkash_pic" placeholder="Price" />
                                        <img src="{{ asset($payment->bkash_pic) }}" alt="" style="height: 200px; width: 300px;">
                                    </div>
                                </div>
                            </div>
                            <strong><mark>Nagad</mark></strong>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="text" name="nagad_number" value="{{ $payment->nagad_number }}" placeholder="Enter Tour Title" />
                                        <label for="inputFirstName">Nagad Number</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="file" name="nagad_pic" placeholder="Price" />
                                        <img src="{{ asset($payment->nagad_pic) }}" alt="" style="height: 200px; width: 300px;">
                                    </div>
                                </div>
                            </div>
                            <strong><mark>Rocket</mark></strong>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="text" name="rocket_number" value="{{ $payment->rocket_number }}" placeholder="Enter Tour Title" />
                                        <label for="inputFirstName">Rocket Number</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="file" name="rocket_pic" placeholder="Price" />
                                        <img src="{{ asset($payment->rocket_pic) }}" alt="" style="height: 200px; width: 300px;">
                                    </div>
                                </div>
                            </div>
                            <strong><mark>Bank Account</mark></strong>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="text" name="bank_acc_number" value="{{ $payment->bank_acc_number }}" placeholder="Enter Tour Title" />
                                        <label for="inputFirstName">Bank Account Number</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="file" name="bank_acc_pic" placeholder="Price" />
                                        <img src="{{ asset($payment->bank_acc_pic) }}" alt="" style="height: 200px; width: 300px;">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="mt-4 mb-0">
                                    <input class="form-control btn btn-success" type="submit" value="Update This Payment Info">
                                </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <a class="form-control btn btn-info" href="{{ route('manage-payment-info') }}">Go to Manage Payment Info</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
