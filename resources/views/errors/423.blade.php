<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Piyetra CMS | Locked Account</title>

    <link href="{{ url('piyetracms/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('piyetracms/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ url('piyetracms/css/animate.css') }}" rel="stylesheet">
    <link href="{{ url('piyetracms/css/style.css') }}" rel="stylesheet">

</head>

<body class="gray-bg">
<?php 
    $user = \App\User::findOrFail($exception->getMessage()); 
?>
<div class="lock-word animated fadeInDown">
    <span class="first-word">LOCKED</span><span>ACCOUNT</span>
</div>
    <div class="middle-box text-center lockscreen animated fadeInDown">
        <div>
            <div style="height:150px;"></div>
            <h3>{{ $user->name }}</h3>
            <p>Your account has been locked. Please contact your manager</p>
            <a class="btn btn-warning" href="{{ route('login') }}"><i class="fa fa-arrow-left"></i> Go To Login Page</a>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{ url('piyetracms/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ url('piyetracms/js/bootstrap.min.js') }}"></script>

</body>

</html>
