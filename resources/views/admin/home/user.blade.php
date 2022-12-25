<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayan Tour Waiting Zone</title>
    <link rel="stylesheet" href="{{ asset('frontEndAsset') }}/css/bootstrap.css">
</head>
<body>
<div class="container">
        <div class="row c-mr-0">
            <div class="col-md-12">
                <div class="alert alert-primary" role="alert">
                    <i class="fa-solid fa-flag"></i>
                    <h1>Hi there! You are requesting to be an Admin, it's need existing admin's approval. Please wait for validation. In this mean time you can visit our website. Thank you!</h1>
                </div>
                <a class="btn btn-info" href="{{route('/')}}">Visit Ayan Tour</a>
                <a class="btn btn-danger" href="#" onclick="event.preventDefault(); document.getElementById('logout').submit()">Logout</a>
                    <form action="{{ route('logout') }}" method="post" id="logout">
                        @csrf
                    </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('frontEndAsset') }}/js/bootstrap.bundle.min.js"></script>
</body>
</html>


