@extends('layouts.backend')
@section('title', 'Feedback View Page')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-5">
        <h2 class="mt-3 mb-2">Contact Form Detail</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="dashboard.html">Home</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Contact Form Detail</strong>
            </li>
        </ol>
    </div>
    <div class="col-sm-7">
        <div class="form-group text-lg-start float-lg-right mt-5">
            <a href="{{url()->previous()}}" class="btn btn-dark m-t-n-xs">Back</a>
        </div>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight ecommerce">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-content">
                    <div class="project-list">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td class="project-title">
                                        <h5 class="pb-0 mb-0 fw-bold">Customer Name</h5>
                                    </td>
                                    <td class="project-title">
                                        {{ $contactform->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-title">
                                        <h5 class="pb-0 mb-0 fw-bold">E-Mail Address</h5>
                                    </td>
                                    <td class="project-title">
                                        {{ $contactform->email }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-title">
                                        <h5 class="pb-0 mb-0 fw-bold">Phone Number</h5>
                                    </td>
                                    <td class="project-title">
                                        {{ $contactform->phone }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-title">
                                        <h5 class="pb-0 mb-0 fw-bold">Message</h5>
                                    </td>
                                    <td class="project-title">
                                        {{ $contactform->message }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop