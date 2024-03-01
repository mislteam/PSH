@php
    $filter = session()->get('filter');
    $wallet_status = $filter['wallet_status'];
    $status = $filter['status'];
    $start_date = $filter['start_date'];
    $end_date = $filter['end_date'];
@endphp
@extends('layouts.frontend')
@section('title', 'Account Setting')
@section('style')
    <style>
        .transaction-container {
            border: 1px solid #ddd7d7;
        }

        .transtion-table th{
            font-size: 18px;
        }
        .transtion-table td{
            font-size: 14px;
        }
    </style>
@endsection
@section('content')
    @include('frontend.layouts.parts.general-banner', ['title' => "Transactions"])
    <div class="container my-3" style="min-height : 50vh" >
        <h3 class="my-3 text-capitalize fw-bold translate"> transaction history </h3>
        {{-- Search component starts  --}}
        <div class="p-3 transaction-container">
            <form action="" method="GET">
                @csrf
                <div class="row">
                    <div class="col-md-2">
                        <small class="translate"> Wallet </small>
                    <select name="wallet_status" class="form-select">
                            <option value="all" {{$wallet_status == "all" ? "selected" : ""}} class="translate"> All </option>
                            <option value="deposit" {{$wallet_status == "deposit" ? "selected" : ""}} class="translate"> Deposit </option>
                            <option value="withdraw" {{$wallet_status == "withdraw" ? "selected" : ""}} class="translate"> Withdraw </option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <small class="translate"> Start Date </small>
                        <input type="date" name="start_date" id="" class="form-control" value="{{$start_date}}">
                    </div>
                    <div class="col-md-3">
                        <small class="translate"> End Date </small>
                        <input type="date" name="end_date" id="" class="form-control" value="{{$end_date}}">
                    </div>
                    <div class="col-md-2">
                        <small class="translate"> Status </small>
                        <select name="status" class="form-select">
                            <option value="all" {{$status == "all" ? "selected" : ""}} class="translate"> All </option>
                            <option value="pending" {{$status == "pending" ? "selected" : ""}} class="translate"> Pending </option>
                            <option value="completed" {{$status == "completed" ?"selected" : ""}} class="translate"> Completed </option>
                            <option value="cancel" {{$status == "cancel" ? "selected" : ""}} class="translate"> Cancel </option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <small></small><br>
                        <button type="submit" class="btn bg-custom btn-sm text-white"> <span class="translate"> Search </span> </button>
                    </div>
                </div>
            </form>
        </div>
        {{-- Search ends  --}}

        {{-- transaction table starts  --}}
        <div class="table-responsive my-3">
            <table class="table table-bordered transtion-table">
                <thead>
                    <tr>
                        <th  class="translate"> No </th>
                        <th  class="translate"> Date/Time </th>
                        <th  class="translate"> Type </th>
                        <th  class="translate"> Wallet Status </th>
                        <th  class="translate"> Amount </th>
                        <th  class="translate">Status </th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $index =1;
                    @endphp
                    @forelse ($transactions as $item)
                    <tr>
                        <td> {{$index++}} </td>
                        <td> {{$item->created_at->isoFormat('LLLL')}} </td>
                        <td>{{ $item->coin->name == "usdt" ? "USDT" : strtoupper(substr($item->coin->name, 0, strpos($item->coin->name, 'usdt'))) }} </td>
                        <td> {{ucfirst($item->wallet_status)}} </td>
                        <td> @if ($item->wallet_status == 'withdraw')
                            <span class="text-danger"> -{{formatNumber($item->amount)}} </span>
                        @else
                            <span class="text-success"> +{{formatNumber($item->amount)}} </span>
                        @endif
                        </td>
                        <td> {{$item->status}} </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="100%" class="text-center text-danger"> No Data  </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-end my-2">
            {{$transactions->links('frontend.layouts.pagination_ui')}}
        </div>
        {{-- transaction table ends  --}}
    </div>
@endsection