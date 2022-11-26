@extends('admin.master')
@section('title')
    Manage Popular Tour
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
                        <th class="bg-dark text-white">Sl</th>
                        <th class="bg-secondary text-white">Day</th>
                        <th class="bg-primary text-white">Tour Title</th>
                        <th class="bg-secondary text-white">Tour Location</th>
                        <th class="bg-primary text-white">Duration (Hours)</th>
                        <th class="bg-secondary text-white">Attraction</th>
                        <th class="bg-primary text-white">Holiday Special</th>
                        <th class="bg-secondary text-white">Holiday Name</th>
                        <th class="bg-primary text-white">Location's Description</th>
                        <th class="bg-secondary text-white">Visit Schedule</th>
                        <th class="bg-primary text-white">Image</th>
                        <th class="bg-secondary text-white">Status</th>
                        <th colspan="3" class="text-center bg-warning text-white">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $i=1; @endphp
                    @foreach($ptours as $ptour)
                    <tr>
                        <td></td>
                        <td>01</td>
                        <td>{{ $ptour->pt_title }}</td>
                        <td>{{ $ptour->pt_fday_location }}</td>
                        <td>{{ $ptour->pt_fday_duration }}</td>
                        <td>{{ $ptour->pt_fday_attraction }}</td>
                        <td>{{ $ptour->pt_fday_holiday_special }}</td>
                        <td>{{ $ptour->pt_fday_holiday }}</td>
                        <td>{!! substr($ptour->pt_fday_description,0,200).'.....' !!}</td>
                        <td>{!! substr($ptour->pt_fday_schedule,0,200).'.....' !!}</td>
                        <td><img src="{{ asset($ptour->pt_fday_image) }}" alt="" style="height: 100px; width: 100px;"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                    <tbody>
                    <tr>
                        <td class="text-white bg-dark">{{ $i++ }}</td>
                        <td>02</td>
                        <td></td>
                        <td>{{ $ptour->pt_sday_location }}</td>
                        <td>{{ $ptour->pt_sday_duration }}</td>
                        <td>{{ $ptour->pt_sday_attraction }}</td>
                        <td>{{ $ptour->pt_sday_holiday_special }}</td>
                        <td>{{ $ptour->pt_sday_holiday }}</td>
                        <td>{!! substr($ptour->pt_sday_description,0,200).'.....' !!}</td>
                        <td>{!! substr($ptour->pt_sday_schedule,0,200).'.....' !!}</td>
                        <td><img src="{{ asset($ptour->pt_sday_image) }}" alt="" style="height: 100px; width: 100px;"></td>
                        <td>{{ $ptour->status==1? 'Published':'Unpublished'}}</td>
                        <td>
                            @if($ptour->status==1)
                                <a class="btn btn-warning" href="{{ route('status',['id'=>$ptour->id]) }}">Unpublished</a>
                            @else
                                <a class="btn btn-info" href="{{ route('status',['id'=>$ptour->id]) }}">Published</a>
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-info" href="{{ route('edit-popular-tour',['id'=>$ptour->id]) }}">Edit</a>
                        </td>
                        <td>
                            <form action="{{'delete-popular-tour'}}" method="post" id="delete">
                                @csrf
                                <input type="hidden" value="{{ $ptour->id }}" name="ptour_id">
                                <input class="btn btn-danger" type="submit" value="Delete" onclick="return confirm('Are you sure?')">
                            </form>
                        </td>
                    </tr>
                    </tbody>
                    <tbody>
                    <tr>
                        <td></td>
                        <td>03</td>
                        <td></td>
                        <td>{{ $ptour->pt_tday_location }}</td>
                        <td>{{ $ptour->pt_tday_duration }}</td>
                        <td>{{ $ptour->pt_tday_attraction }}</td>
                        <td>{{ $ptour->pt_tday_holiday_special }}</td>
                        <td>{{ $ptour->pt_tday_holiday }}</td>
                        <td>{!! substr($ptour->pt_tday_description,0,200).'.....' !!}</td>
                        <td>{!! substr($ptour->pt_tday_schedule,0,200).'.....' !!}</td>
                        <td><img src="{{ asset($ptour->pt_tday_image) }}" alt="" style="height: 100px; width: 100px;"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer text-center py-3">
            <a class="form-control btn btn-info" href="{{route('add-popular-tour') }}">Go to Add Popular Tour</a>
        </div>
    </div>
    </div>
    </div>
@endsection
