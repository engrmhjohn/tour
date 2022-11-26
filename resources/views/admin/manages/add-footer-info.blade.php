@extends('admin.master')
@section('title')
    Add Footer Info
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header bg-info"><h3 class="text-center font-weight-light my-4">Add Footer Info</h3></div>
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
                            <form action="{{ route('new-footer-info') }}" method="post">
                                @csrf
                                <strong><mark>Copyright Section</mark></strong>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputFirstName" type="text" name="copyright" placeholder="Enter Tour Title" />
                                            <label for="inputFirstName">All rights reserved</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="mt-4 mb-0">
                                        <input class="form-control btn btn-success" type="submit" value="Add This footer Info">
                                    </div>
                            </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <a class="form-control btn btn-info" href="{{ route('manage-footer-info') }}">Go to Manage footer Info</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
