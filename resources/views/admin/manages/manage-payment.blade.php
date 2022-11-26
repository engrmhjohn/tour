@extends('admin.master')
@section('title')
    Manage Payment Info
    @endsection
@section('content')
            <div class="container-fluid px-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="alert alert-primary" role="alert">
                            <i class="fa-solid fa-flag"></i>
                            <h1>{{ Session('success') }}</h1>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                            @foreach($payments as $payment)
                            <tr>
                                <th class="bg-secondary text-white">Bkash Number</th>
                                <th class="bg-primary text-white">Bkash Pic</th>
                                <th class="bg-secondary text-white">Nagad Number</th>
                                <th class="bg-primary text-white">Nagad Pic</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{ $payment->bkash_number }}</td>
                                <td>
                                    <img src="{{ asset($payment->bkash_pic) }}" alt="" style="height: 200px; width: 300px;">
                                </td>
                                <td>{{ $payment->nagad_number }}</td>
                                <td>
                                    <img src="{{ asset($payment->nagad_pic) }}" alt="" style="height: 200px; width: 300px;">
                                </td>
                            </tr>
                            </tbody>
                            <thead>
                            <tr>
                                <th class="bg-secondary text-white">Rocket Number</th>
                                <th class="bg-primary text-white">Rocket Pic</th>
                                <th class="bg-secondary text-white">Back Acc Number</th>
                                <th class="bg-primary text-white">Bank Pic</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{ $payment->rocket_number }}</td>
                                <td>
                                    <img src="{{ asset($payment->rocket_pic) }}" alt="" style="height: 200px; width: 300px;">
                                </td>
                                <td>{{ $payment->bank_acc_number }}</td>
                                <td>
                                    <img src="{{ asset($payment->bank_acc_pic) }}" alt="" style="height: 200px; width: 300px;">
                                </td>
                            </tr>
                            @endforeach
                            <th colspan="2" class="text-center bg-warning text-white">Action</th>
                            <tr>
                                <td>
                                    <a class="btn btn-info" href="{{ route('edit-payment-info',['id'=>$payment->id]) }}">Edit Payment Info</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
