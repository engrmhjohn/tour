@extends('admin.master')
@section('title')
    Manage Admin
    @endsection
@section('content')
            <div class="container-fluid px-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="alert alert-primary" role="alert">
                            <h1>Admin Management</h1>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                            <tr>
                                <th class="bg-secondary text-white">SL</th>
                                <th class="bg-primary text-white">Admin Name</th>
                                <th class="bg-primary text-white">Admin Email</th>
                                <th class="bg-primary text-white">Role</th>
                                <th colspan="2" class="text-center bg-warning text-white">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @php $i=1 @endphp
                            @foreach($users as $user)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->role==0? 'Admin':'Not Admin'}}</td>
                                <td>
                                    @if($user->role==0)
                                        <a class="btn btn-warning" href="{{ route('role',['id'=>$user->id]) }}">Remove Admin</a>
                                    @else
                                        <a class="btn btn-info" href="{{ route('role',['id'=>$user->id]) }}">Make Admin</a>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ 'delete-admin' }}" method="post" id="delete">
                                        @csrf
                                        <input type="hidden" value="{{ $user->id }}" name="admin_id">
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
