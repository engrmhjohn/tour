@extends('admin.master')
@section('title')
    Manage Footer Copyright
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
                                <th class="bg-primary text-white">Footer Copyright</th>
                                <th class="text-center bg-warning text-white">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($copyrights as $copyright)
                            <tr>
                                <td>{{ $copyright->copyright }}</td>
                                <td>
                                    <a class="btn btn-info" href="{{ route('edit-footer-info',['id'=>$copyright->id]) }}">Edit</a>
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
