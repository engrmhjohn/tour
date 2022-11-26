@extends('admin.master')
@section('title')
    Manage About
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
                        <th class="bg-primary text-white">About Description</th>
                        <th class="bg-primary text-white">About Image</th>
                        <th class="text-center bg-warning text-white">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($abouts as $about)
                        <tr>
                            <td>{!! $about->about !!}</td>
                            <td>
                                <img src="{{ asset($about->about_pic) }}" alt="" style="height: 300px; width: 400px;">
                            </td>
                            <td>
                                <a class="btn btn-info" href="{{ route('edit-about-info',['id'=>$about->id]) }}">Edit</a>
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
