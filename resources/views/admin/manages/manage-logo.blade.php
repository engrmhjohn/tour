@extends('admin.master')
@section('title')
    Manage Logo
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
                                <th class="bg-secondary text-white">SL</th>
                                <th class="bg-primary text-white">Logos</th>
                                <th colspan="2" class="text-center bg-warning text-white">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i=1; @endphp
                            @foreach($logos as $logo)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td><img src="{{ asset($logo->logo) }}" alt="" style="height: 60px; width: 180px;"></td>
                                <td>
                                    <a class="btn btn-info" href="{{ route('edit-logo',['id'=>$logo->id]) }}">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ 'delete-logo' }}" method="post" id="delete">
                                        @csrf
                                        <input type="hidden" value="{{ $logo->id }}" name="logo_id">
                                        <input class="btn btn-danger" type="submit" value="Delete" onclick="return confirm('Are you sure?')">
                                    </form>
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
