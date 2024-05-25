@extends('layouts.backend')
@section('title', 'Product Page')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2 class="mt-3 mb-2">Create Products</h2>
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
            <a href="{{route('product.index')}}" class="btn btn-dark m-t-n-xs">Back</a>
        </div>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight ecommerce">
    <div class="row">
        <div class="col-lg-9">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">
                            <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><strong>Product Name:</strong></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="product_name"
                                            placeholder="Enter Product Name" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><strong>Prodcut Category</strong></label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="product_cat" required>
                                            <option value="" selected disabled>Select Product Cateory</option>
                                            @foreach ($cat as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><strong>Prodcut Sub Category</strong></label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="product_subcat" required>
                                            <option value="" selected disabled>Select Product Sub Cateory</option>
                                            @foreach ($subcat as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><strong>Prodcut Brands</strong></label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="product_brand" required>
                                            <option value="" selected disabled>Select Brands</option>
                                            @foreach ($brand as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><strong>Prodcut Type</strong></label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="product_type" required>
                                            <option value="" selected disabled>Select Prodcut Type</option>
                                            @foreach ($producttype as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><strong>Prodcut
                                            Specification</strong></label>
                                    <div class="col-sm-10">
                                        <div id="dynamic-fields">
                                            <div class="row field">
                                                <div class="col-sm-5 form-group">
                                                    <input type="text" class="form-control" name="title[]"
                                                        placeholder="Title" required>
                                                </div>
                                                <div class="col-sm-5 form-group">
                                                    <input type="text" class="form-control" name="value[]"
                                                        placeholder="Value" required>
                                                </div>
                                                <div class="col-sm-2 form-group">
                                                    <button class="form-control btn btn-sm btn-dark" type="submit"
                                                        disabled><strong>Delete</strong></button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group text-end float-right">
                                                    <button class="btn btn-dark m-t-n-xs text-start float-right"
                                                        type="button" id="add-field"><strong>Add ++</strong></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><strong>Product Description:</strong></label>
                                    <div class="col-sm-10">
                                        <textarea id="summernote" class="form-control mt-2" cols="20" rows="5"
                                            placeholder="Enter Body" name="product_des" required></textarea>
                                    </div>
                                </div>
                                <label class="col-form-label"><strong>Document File:</strong></label>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><strong>PDF File:</strong></label>
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input id="inputGroupFile01" type="file" class="custom-file-input"
                                                    name="product_pdf" accept=".pdf" required>
                                                <label class="custom-file-label" for="inputGroupFile01">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><strong>Video Link:</strong></label>
                                    <div class="col-sm-10 form-group">
                                        <input type="text" class="form-control" placeholder="Enter your youtube link"
                                            name="product_video_link" required>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5><b>Feature Image</b></h5>
                </div>
                <div class="ibox-content">
                    <div class="input-group">
                        <div class="custom-file">
                            <input id="inputGroupFile01" type="file" class="custom-file-input"
                                name="product_guide_image" accept="image/jpeg, image/png, image/webp, image/jpeg"
                                required>
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ibox ">
                <div class="ibox-title">
                    <h5><b>Guide Document (PDF)</b></h5>
                </div>
                <div class="ibox-content">
                    <div class="input-group">
                        <div class="custom-file">
                            <input id="inputGroupFile01" type="file" class="custom-file-input" name="product_guide_pdf"
                                accept=".pdf" required>
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ibox ">
                <div class="ibox-title">
                    <h5><b>Guide Document (Video File)</b></h5>
                </div>
                <div class="ibox-content">
                    <div class="form-group">
                        <select class="form-control" id="source" name="source" required>
                            {{-- <option value="type" selected>Select Video Type</option> --}}
                            <option value="link">Youtube Link</option>
                            <option value="file">Video file Upload</option>
                        </select>
                    </div>

                    <div id="linkInput" class="form-group">
                        <label for="video_link">Enter Video Link:</label>
                        <input type="text" class="form-control" id="video_link" name="video_link"
                            placeholder="Enter Links">
                    </div>

                    <div id="fileInput" class="form-group" style="display:none;">
                        <label for="video_file">Upload Video File:</label>
                        <input type="file" class="form-control-file" id="video_file" name="video_file" accept="video/*">
                    </div>
                </div>
            </div>
            
            <div class="form-group row">
                <div class="col-sm-12">
                    <button class="btn btn-sm btn-dark float-right text-start m-t-n-xs"
                        type="submit"><strong>Save</strong></button>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
@endsection
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Maximum number of fields allowed
        const maxFields = 6;
    
        // Function to add new label and input field pair
        function addField() {
            let fieldCount = document.querySelectorAll('.field').length + 1;
            // Check if maximum limit has been reached
            if (fieldCount >= maxFields) {
                alert("The maximum limit is 5 fields.");
                return;
            }
       
            const newField = `
            <div class="row field">
                <div class="col-sm-5 form-group">
                    <input type="text" class="form-control" name="title[]" placeholder="Title ${fieldCount}">
                </div>
                <div class="col-sm-5 form-group">
                    <input type="text" class="form-control" name="value[]" placeholder="Value ${fieldCount}">
                </div>
                <div class="col-sm-2 form-group">
                    <button class="form-control btn btn-sm btn-dark delete-field" type="button">
                        Delete
                    </button>
                </div>
            </div>`;
            document.getElementById('dynamic-fields').insertAdjacentHTML('beforeend', newField);
        }

        // Add event listener to the button
        document.getElementById('add-field').addEventListener('click', addField);

        // Event delegation for dynamically added delete buttons
        document.addEventListener('click', function(event) {
            if (event.target.classList.contains('delete-field')) {
                event.target.closest('.field').remove();
            }
        });

        var sourceSelect = document.getElementById('source');
        var linkInput = document.getElementById('linkInput');
        var fileInput = document.getElementById('fileInput');

        sourceSelect.addEventListener('change', function() {
            if (this.value === 'link') {
                linkInput.style.display = 'block';
                fileInput.style.display = 'none';
            } else if (this.value === 'file') {
                linkInput.style.display = 'none';
                fileInput.style.display = 'block';
            }else if(this.value === 'type'){
                linkInput.style.display = 'none';
                fileInput.style.display = 'none';
            }
        });
    });
</script>