@extends('admin.master')
@section('title')
    Manage Frequently Asked Questions
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
                        <th class="bg-dark text-white">SL</th>
                        <th class="bg-primary text-white">Frequently Asked Questions</th>
                        <th class="bg-primary text-white">FAQ - Answer</th>
                        <th colspan="2" class="text-center bg-warning text-white">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $i=1 @endphp
                    @foreach($faqs as $faq)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $faq->question }}</td>
                            <td>{{ $faq->answer }}</td>
                            <td>
                                <a class="btn btn-info" href="{{ route('edit-faq-info',['id'=>$faq->id]) }}">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('delete-faq-info') }}" method="post" id="delete">
                                    @csrf
                                    <input type="hidden" value="{{$faq->id}}" name="faq_id">
                                    <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are You Sure?')">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer text-center py-3">
            <a class="form-control btn btn-info" href="{{ route('add-faq-info') }}">Go to Add FAQ</a>
        </div>
    </div>
    </div>
    </div>
@endsection
