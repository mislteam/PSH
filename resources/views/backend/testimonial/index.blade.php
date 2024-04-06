@extends('layouts.backend')
@section('title', 'Tesmonial Page')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2 class="mt-3 mb-2">Client Testimonial</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="dashboard.html">Home</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Client Testimonial</strong>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight ecommerce">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-content">
                    <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                        <thead>
                            <tr>
                                <th data-toggle="true">Client</th>
                                <th data-hide="phone">Company</th>
                                <th data-hide="phone">Review</th>
                                <th data-hide="phone">Status</th>
                                <th class="text-right" data-sort-ignore="true">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($testimonials) > 0)
                            @foreach ($testimonials as $testimonial)
                            <tr>
                                <td>
                                    {{$testimonial->fullname}}
                                </td>
                                <td>
                                    {{$testimonial->companyname}}
                                </td>
                                <td> {{$testimonial->review}}</td>
                                <td>
                                    @if ($testimonial->status == 0)
                                    Disable
                                    @else
                                    Active
                                    @endif
                                </td>
                                <td class="text-right">
                                    <div class="btn-group">
                                        @if ($testimonial->status == 0)
                                        <div class="mr-2">
                                            <button class="btn btn-outline-light text-dark shadow-lg"
                                                onclick="changeState('{{ route('changeTestimonialState') }}', {{ $testimonial->id }})">
                                                <i class="fa fa-check"></i>
                                            </button>
                                        </div>
                                        <div class="mr-2">
                                            <button class="btn btn-outline-light text-dark btn-sm"
                                                onclick="changeState('{{ route('changeTestimonialState') }}', {{ $testimonial->id }})"
                                                disabled>
                                                <i class="fa fa-ban" aria-hidden="true" data-toggle="tooltip"
                                                    data-placement="top" title="ban"></i>
                                            </button>
                                        </div>
                                        @else
                                        <div class="mr-2">
                                            <button class="btn btn-outline-light text-dark shadow-lg"
                                                onclick="changeState('{{ route('changeTestimonialState') }}', {{ $testimonial->id }})"
                                                disabled>
                                                <i class="fa fa-check"></i>
                                            </button>
                                        </div>
                                        <div class="mr-2">
                                            <button class="btn btn-outline-light text-dark btn-sm"
                                                onclick="changeState('{{ route('changeTestimonialState') }}', {{ $testimonial->id }})">
                                                <i class="fa fa-ban" aria-hidden="true" data-toggle="tooltip"
                                                    data-placement="top" title="ban"></i>
                                            </button>
                                        </div>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="100%" class="text-danger text-center"> No Data</td>
                            </tr>
                            @endif
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="6">
                                    {{ $testimonials->links('backend.layouts.pagination_ui') }}
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop