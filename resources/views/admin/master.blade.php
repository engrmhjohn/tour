<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    {{--*summernote cdn links*--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">--}}
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    {{--*end summernote cdn links*--}}
    <link href=" {{ asset('adminAsset') }}/css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('frontEndAsset') }}/css/bootstrap.css">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
@include('admin.include.header')
<div id="layoutSidenav">
    @include('admin.include.sidebar')
    <div id="layoutSidenav_content">
        <main>
            @yield('content')
        </main>
@include('admin.include.footer')
    </div>
</div>
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>--}}
<script src="{{ asset('frontEndAsset') }}/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('adminAsset') }}/js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{ asset('adminAsset') }}/js/datatables-simple-demo.js"></script>
{{--*summernote cdn links*--}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>--}}
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.summernote').summernote({
            height: 250,
        });
    });
</script>
{{--*summernote cdn links*--}}
</body>
</html>


