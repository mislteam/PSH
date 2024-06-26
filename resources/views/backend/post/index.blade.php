@extends('layouts.backend')
@section('title', 'Forum Category Page')
@section('content')
@php
if(session('filter')) {
$projectcatname = session('filter')['name'];
}
@endphp
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2 class="mt-3 mb-2">Create Forum Category</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Forum Category</strong>
            </li>
        </ol>
    </div>
    <div class="col-sm-8">
        <div class="form-group text-lg-start float-lg-right mt-5">
            @can('create forum')
            <a href="{{route('PostCreate')}}" class="btn btn-dark m-t-n-xs">Create Category</a>
            @endcan
        </div>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight ecommerce">
    {{-- <form action="" method="get" class="my-3">
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    <label class="col-form-label"><strong>Project Category Name</strong></label>
                    <input type="text" name="name" value="" placeholder="Project Category Name" class="form-control">
                </div>
            </div>

            <div class="col-2">
                <div class="form-group">
                    <label class="col-form-label" for="status"></label>
                    <button type="submit" class="form-control btn btn-dark btn-sm mt-3"> Search </button>
                </div>
            </div>
        </div>
    </form> --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-content">
                    <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                        <thead>
                            <tr>
                                <th data-toggle="true">Title</th>
                                <th data-toggle="true">Description</th>
                                <th data-toggle="true">Date</th>
                                <th class="text-right" data-sort-ignore="true">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($posts) > 0)
                            @foreach ($posts as $item)
                            <tr>
                                <td>
                                    {{$item->title}}
                                </td>
                                <td>
                                    {{Str::limit($item->description, 20, '...')}}
                                </td>
                                <td>
                                    {{$item->created_at->format('d M Y')}}
                                </td>
                                <td class="text-right">
                                    <div class="btn-group">
                                        @can('edit forum')
                                        <button class="btn-white btn btn-sm">
                                            <a href="{{route('PostEdit',$item->id)}}" class="text-dark">Edit</a>
                                        </button>
                                        @endcan
                                        {{-- @can('delete category')
                                        <button class="btn btn-white btn-sm text-dark"
                                            onclick="deleteForm('{{route('news.delete')}}', {{$new->id}})">delete</button>
                                        @endcan --}}
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="100%" class="text-danger text-center p-3 fw-bold"> No Data</td>
                            </tr>
                            @endif
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="6">
                                    {{ $posts->links('backend.layouts.pagination_ui') }}
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection