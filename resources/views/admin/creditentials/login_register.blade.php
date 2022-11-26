<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ayan Tour Admin</title>
    <link href="{{ asset('adminAsset') }}/css/login_style.css" rel="stylesheet" />
</head>
<body>
<div class="wrapper">
    <div class="title-text">
        <div class="title login">Login Form</div>
        <div class="title signup">Signup Form</div>
    </div>
    <div class="form-container">
        <div class="slide-controls">
            <input type="radio" name="slide" id="login" checked>
            <input type="radio" name="slide" id="signup">
            <label for="login" class="slide login">Login</label>
            <label for="signup" class="slide signup">SignUp</label>
            <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
            <form method="POST" class="login" action="{{ route('login') }}">
                @csrf
                <div class="field">
                    <input type="email" name="email" placeholder="Email Address" required>
                </div>
                <div class="field">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="pass-link"><a href="#">Forgot password?</a></div>
                <div class="field btn">
                    <div class="btn-layer"></div>
                    <input type="submit" value="Login">
                </div>
                <div class="signup-link">New Admin? <a href="">SignUp Now</a></div>
            </form>
            <form method="POST" class="signup" action="{{ route('register') }}">
                @csrf
                <div class="field">
                    <input type="text" name="name" placeholder="Your Name" required>
                </div>
                <div class="field">
                    <input type="email" name="email" placeholder="Email Address" required>
                </div>
                <div class="field">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="field">
                    <input type="password" name="password_confirmation" placeholder="Confirm password" required>
                </div>
                <div class="field btn">
                    <div class="btn-layer"></div>
                    <input type="submit" value="SignUp">
                </div>
            </form>
        </div>
    </div>
</div>
<script src="{{ asset('adminAsset') }}/js/login.js"></script>
</body>
</html>
