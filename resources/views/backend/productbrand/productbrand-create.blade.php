@extends('layouts.backend')
@section('title','Product-category Create-Page')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2 class="mt-3 mb-2">Create Product Brand</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="dashboard.html">Home</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Products</strong>
            </li>
        </ol>
    </div>
    <div class="col-sm-8">
        <div class="form-group text-lg-start float-lg-right mt-5">
            <a href="{{ route('productbrand.index') }}" class="btn btn-dark m-t-n-xs">Back</a>
        </div>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight ecommerce">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-content">
                    <form action="{{ route('productbrand.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Brand Name:</strong></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="brand_name" placeholder="Enter Product Brand Name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Product Category Name:</strong></label>
                            <div class="col-sm-10">
                                <select id="category" class="form-control" name="cat_id">
                                    <option selected>Select Product Category</option>
                                    @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Product Sub Category Name:</strong></label>
                            <div class="col-sm-10">
                                <select id="subcategory" class="form-control" name="subcat_id">
                                    <option selected>Select Product Sub Category</option>
                                    <!-- Subcategories will be populated by JavaScript -->
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Brand Description:</strong></label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="9" name="brand_description" maxlength="5000" placeholder="Enter the Category Description" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Brand Image:</strong></label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input id="inputGroupFile01" type="file" name="brand_image" class="custom-file-input" accept="image/jpeg, image/png, image/webp, image/jpeg" required>
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button class="btn btn-sm btn-dark float-right text-start m-t-n-xs" type="submit"><strong>Save</strong></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        var categorySubcategories = @json($categorySubcategories);
        console.log(categorySubcategories); // Debugging line

        $('#category').change(function() {
            var categoryId = $(this).val();
            var subcategories = categorySubcategories[categoryId] || [];
            console.log(subcategories); // Debugging line
            $('#subcategory').empty();
            $('#subcategory').append('<option value="">Select Product Sub Category</option>');
            $.each(subcategories, function(index, subcategory) {
                $('#subcategory').append('<option value="' + subcategory.id + '">' + subcategory.name + '</option>');
            });
        });

        var selectedCategory = $('#category').val();
        if (selectedCategory) {
            $('#category').trigger('change');
        }
    });
</script>
@endsection
