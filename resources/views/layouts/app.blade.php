<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{generalSetting('title')}} | Email-Verify</title>
    <link rel="stylesheet" href="{{asset('css/main/bootstrap4.3.min.css')}}">
    <link href="{{asset('template/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('template/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('template/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
</head>
<body>  
    <div class="content-container">
        @yield('content')
    </div>
    <script src="{{asset('template/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('template/js/popper.min.js')}}"></script>
    <script src="{{asset('js/main/bootstrap4.3.min.js')}}"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    @yield('script')
</body>
</html>