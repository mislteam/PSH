@if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif
@if (session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
@endif
@if (session('warning'))
    <div class="alert alert-warning">
        {{session('warning')}}
    </div>
@endif
@if (session('danger'))
    <div class="alert alert-danger">
        {{session('danger')}}
    </div>
@endif