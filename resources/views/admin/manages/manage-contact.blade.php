@extends('admin.master')
@section('title')
    Manage Contact
    @endsection
@section('content')
            <div class="container-fluid px-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="alert alert-primary" role="alert">
                            <i class="fa-solid fa-flag"></i>
                            <h1 class="mt-4">{{ Session('success') }}</h1>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                            <tr>
                                <th class="bg-secondary text-white">SL</th>
                                <th class="bg-primary text-white">Contact Mail</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contacts as $contact)
                            <tr>
                                <td>01</td>
                                <td>{{ $contact->contact_mail }}</td>
                            </tr>
                            </tbody>
                            <thead>
                            <tr>
                                <th class="bg-secondary text-white">SL</th>
                                <th class="bg-primary text-white">Contact Number</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>02</td>
                                <td>{{ $contact->contact_number }}</td>
                            </tr>
                            </tbody>
                            <thead>
                            <tr>
                                <th class="bg-secondary text-white">SL</th>
                                <th class="bg-primary text-white">Youtube Link</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>03</td>
                                <td>{{ $contact->ytlink }}</td>
                            </tr>
                            </tbody>
                            <thead>
                            <tr>
                                <th class="bg-secondary text-white">SL</th>
                                <th class="bg-primary text-white">Facebook Link</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>04</td>
                                <td>{{ $contact->fblink }}</td>
                            </tr>
                            </tbody>
                            <thead>
                            <tr>
                                <th class="bg-secondary text-white">SL</th>
                                <th class="bg-primary text-white">Twitter Link</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>05</td>
                                <td>{{ $contact->twitlink }}</td>
                            </tr>
                            </tbody>
                            <thead>
                            <tr>
                                <th class="bg-secondary text-white">SL</th>
                                <th class="bg-primary text-white">Instagram Link</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>06</td>
                                <td>{{ $contact->instalink }}</td>
                            </tr>
                            </tbody>
                            <thead>
                            <tr>
                                <th class="bg-secondary text-white">SL</th>
                                <th class="bg-primary text-white">Office Location</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>06</td>
                                <td>{{ $contact->office_location }}</td>
                            </tr>
                            </tbody>
                            <thead>
                            <tr>
                                <th class="bg-secondary text-white">SL</th>
                                <th class="bg-primary text-white">Office Map</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>07</td>
                                <td>{{ $contact->office_map }}</td>
                            </tr>
                            </tbody>
                            @endforeach
                            <th colspan="2" class="text-center bg-warning text-white">Action</th>
                            <tr>
                                <td>
                                    <a class="btn btn-info" href="{{ route('edit-contact-info',['id'=>$contact->id]) }}">Edit Contact Info</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
