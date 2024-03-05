<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  
  <link rel="stylesheet" href="{{ asset('template/css/plugins/toastr/toastr.min.css') }}">
</head>
<body>
  @if (auth()->user())
     <h2>Name - {{auth()->user()->name}}</h2>
     <p> ID - {{auth()->user()->user_id}}</p>  
  @else
  <p> Hello World </p>
  @endif
  
  @if (auth()->user())
  <form action="{{route('logout')}}" method="post">
    @csrf
    <button type="submit">logout</button>
  </form>
  @else
  <div style="padding:10px;">
    <a href="{{route('login')}}">login</a> 
  </div>
  @endif
  <script src="{{ asset('template/js/plugins/toastr/toastr.min.js') }}"></script>
  @include('backend.toastr_message')
</body>
</html>