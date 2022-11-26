@extends('admin.master')
@section('title')
    Manage Client Info
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
                            @foreach($clients as $client)
                            <tr>
                                <th class="bg-secondary text-white">1st Client Name</th>
                                <th class="bg-primary text-white">1st Client Location</th>
                                <th class="bg-secondary text-white">1st Client Testimonial</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{ $client->f_client_name }}</td>
                                <td>{{ $client->f_client_location }}</td>
                                <td>{!! $client->f_client_feedback !!}</td>
                            </tr>
                            </tbody>
                            <thead>
                            <tr>
                                <th class="bg-secondary text-white">2nd Client Name</th>
                                <th class="bg-primary text-white">2nd Client Location</th>
                                <th class="bg-secondary text-white">2nd Client Testimonial</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{ $client->s_client_name }}</td>
                                <td>{{ $client->s_client_location }}</td>
                                <td>{!! $client->s_client_feedback !!}</td>
                            </tr>
                            </tbody>
                            <thead>
                            <tr>
                                <th class="bg-secondary text-white">3rd Client Name</th>
                                <th class="bg-primary text-white">3rd Client Location</th>
                                <th class="bg-secondary text-white">3rd Client Testimonial</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{ $client->t_client_name }}</td>
                                <td>{{ $client->t_client_location }}</td>
                                <td>{!! $client->t_client_feedback !!}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <th colspan="2" class="bg-warning text-white text-center">Action</th>
                            </tr>
                            <tr>
                                <td>
                                    <a class="btn btn-info" href="{{ route('edit-client-info',['id'=>$client->id]) }}">Edit Client Info</a>
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
