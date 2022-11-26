@extends('admin.master')
@section('title')
    Manage Day Tour
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
                                <th class="bg-primary text-white">Tour Title</th>
                                <th class="bg-secondary text-white">Tour Location</th>
                                <th class="bg-primary text-white">Duration (Hours)</th>
                                <th class="bg-secondary text-white">Attraction</th>
                                <th class="bg-primary text-white">Holiday Special</th>
                                <th class="bg-secondary text-white">Holiday (Which Day?)</th>
                                <th class="bg-primary text-white">Location's Description</th>
                                <th class="bg-secondary text-white">Visit Schedule</th>
                                <th class="bg-secondary text-white">1 Person TK</th>
                                <th class="bg-primary text-white">1 Person $</th>
                                <th class="bg-secondary text-white">2 Person TK</th>
                                <th class="bg-primary text-white">2 Person $</th>
                                <th class="bg-secondary text-white">3 Person TK</th>
                                <th class="bg-primary text-white">3 Person $</th>
                                <th class="bg-secondary text-white">4 Person TK</th>
                                <th class="bg-primary text-white">4 Person $</th>
                                <th class="bg-secondary text-white">We Offer</th>
                                <th class="bg-primary text-white">Things to Carry</th>
                                <th class="bg-primary text-white">Image</th>
                                <th class="bg-secondary text-white">Status</th>
                                <th colspan="3" class="text-center bg-warning text-white">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i=1; @endphp
                            @foreach($dtours as $dtour)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $dtour->day_tour_title }}</td>
                                <td>{{ $dtour->day_tour_location }}</td>
                                <td>{{ $dtour->day_tour_duration }}</td>
                                <td>{{ $dtour->day_tour_attraction }}</td>
                                <td>{{ $dtour->day_tour_holiday_special }}</td>
                                <td>{{ $dtour->day_tour_holiday }}</td>
                                <td>{!! substr($dtour->day_tour_description,0,200).'.....' !!}</td>
                                <td>{!! substr($dtour->day_tour_schedule,0,200).'.....' !!}</td>
                                <td>{{ $dtour->day_tour_s_bdt }}</td>
                                <td>{{ $dtour->day_tour_s_d }}</td>
                                <td>{{ $dtour->day_tour_d_bdt }}</td>
                                <td>{{ $dtour->day_tour_d_d }}</td>
                                <td>{{ $dtour->day_tour_t_bdt }}</td>
                                <td>{{ $dtour->day_tour_t_d }}</td>
                                <td>{{ $dtour->day_tour_q_bdt }}</td>
                                <td>{{ $dtour->day_tour_q_d }}</td>
                                <td>{!! substr($dtour->day_tour_price_inclusion,0,200).'......' !!}</td>
                                <td>{!! substr($dtour->day_tour_ttc,0,200).'......' !!}</td>
                                <td>
                                    <img src="{{$dtour->day_tour_image}}" alt="" style="height: 200px; width: 300px;">
                                </td>
                                <td>{{ $dtour->d_status==1? 'Published':'Unpublished'}}</td>
                                <td>
                                    @if($dtour->d_status==1)
                                        <a class="btn btn-warning" href="{{ route('d_status',['id'=>$dtour->id]) }}">Unpublished</a>
                                    @else
                                        <a class="btn btn-info" href="{{ route('d_status',['id'=>$dtour->id]) }}">Published</a>
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-info" href="{{ route('edit-day-tour',['id'=>$dtour->id]) }}">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('delete-day-tour') }}" method="post" id="delete">
                                        @csrf
                                        <input type="hidden" value="{{ $dtour->id }}" name="dtour_id">
                                        <input class="btn btn-danger" type="submit" value="Delete" onclick="return confirm('Are you sure?')">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-center py-3">
                    <a class="form-control btn btn-info" href="{{ route('add-day-tour') }}">Go to Add Day Tour</a>
                </div>
            </div>
    </div>
</div>
@endsection
