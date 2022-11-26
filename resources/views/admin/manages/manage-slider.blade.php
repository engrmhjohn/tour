@extends('admin.master')
@section('title')
    Manage Slider
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
                            @foreach($sliders as $slider)
                            <tr>
                                <th class="bg-secondary text-white">Slider No</th>
                                <th class="bg-primary text-white">Title</th>
                                <th class="bg-secondary text-white">Description</th>
                                <th class="bg-primary text-white">Image</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>01</td>
                                <td>{{ $slider->f_slider_title }}</td>
                                <td>{{ $slider->f_slider_description }}</td>
                                <td>
                                    <img src="{{asset($slider->f_slider_pic)}}" alt="" style="height: 200px; width: 300px;">
                                </td>
                            </tr>
                            </tbody>
                            <thead>
                            <tr>
                                <th class="bg-secondary text-white">Slider No</th>
                                <th class="bg-primary text-white">Title</th>
                                <th class="bg-secondary text-white">Description</th>
                                <th class="bg-primary text-white">Image</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>02</td>
                                <td>{{ $slider->s_slider_title }}</td>
                                <td>{{ $slider->s_slider_description }}</td>
                                <td>
                                    <img src="{{asset($slider->s_slider_pic)}}" alt="" style="height: 200px; width: 300px;">
                                </td>
                            </tr>
                            </tbody>
                            <thead>
                            <tr>
                                <th class="bg-secondary text-white">Slider No</th>
                                <th class="bg-primary text-white">Title</th>
                                <th class="bg-secondary text-white">Description</th>
                                <th class="bg-primary text-white">Image</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>03</td>
                                <td>{{ $slider->t_slider_title }}</td>
                                <td>{{ $slider->t_slider_description }}</td>
                                <td>
                                    <img src="{{asset($slider->t_slider_pic)}}" alt="" style="height: 200px; width: 300px;">
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                            <tr>
                                <th colspan="3" class="text-center bg-warning text-white">Action</th>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <a class="btn btn-info" href="{{ route('edit-slider-info',['id'=>$slider->id]) }}">Edit Sliders Info</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
