@extends('admin.master')
@section('title')
    Manage Terms & Conditions
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
                    <tr>
                        <th class="bg-primary text-white">Terms & Conditions</th>
                        <th class="text-center bg-warning text-white">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tcs as $tc)
                        <tr>
                            <td>{!! $tc->tnc !!}</td>
                            <td>
                                <a class="btn btn-info" href="{{ route('edit-tnc-info',['id'=>$tc->id]) }}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
