@extends('layouts.backend')
@section('title', 'Dashboard')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h4 class="mt-3">Dashboard</h4>
    </div>
</div>
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-4">
            <div class="ibox ">
                <div class="ibox-title">
                    <div class="ibox-tools">
                        <span class="label bg-custom float-right">Total</span>
                    </div>
                    <h5>All Users </h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins"> {{$admin_users}} </h1>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="ibox ">
                <div class="ibox-title">
                    <div class="ibox-tools">
                        <span class="label bg-custom float-right">Daily</span>
                    </div>
                    <h5>Users </h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins"> {{$user}} </h1>
                </div>
            </div>
        </div>
    </div>

     {{-- table and graph --}}
     <h2 class="text-dark fw-bold my-3"> Members Table </h2>
     <div> 
         <canvas id="lineChart" height="50" width="auto"></canvas>
     </div>
     {{-- table and graph --}}
</div>
@endsection
@section('script')
<script>
    $(document).ready(function() {

        var lineData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {
                    label: "Member",
                    backgroundColor: "rgba(26,179,148,0.5)",
                    borderColor: "rgba(26,179,148,0.7)",
                    pointBackgroundColor: "rgba(26,179,148,1)",
                    pointBorderColor: "#fff",
                    data: [28, 48, 40, 19, 86, 27, 90]
                },
                {
                    label: "Example Member",
                    backgroundColor: "rgba(220,220,220,0.5)",
                    borderColor: "rgba(220,220,220,1)",
                    pointBackgroundColor: "rgba(220,220,220,1)",
                    pointBorderColor: "#fff",
                    data: [65, 59, 80, 81, 56, 55, 40]
                }
            ]
        };

        var lineOptions = {
            responsive: true
        };


        var ctx = document.getElementById("lineChart").getContext("2d");
        new Chart(ctx, {type: 'line', data: lineData, options:lineOptions});

    });
</script>
@endsection