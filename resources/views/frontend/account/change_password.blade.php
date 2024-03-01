@extends('layouts.frontend')
@section('title', 'Account Setting')
@section('content')
    @include('frontend.layouts.parts.general-banner', ['title' => "Change Password"])
    <div class="container my-3" style="min-height : 50vh">
        {{-- Wallet address --}}
      <div class="d-flex justify-content-between">
        <div>
           <h3 class="fw-bold translate"> Change Password </h3>
        </div>
        <div>
           <div class="text-end">
              <a href="{{url()->previous()}}" class="btn btn-sm bg-custom text-white mb-3 w-100">  
                <span class="translate"> Back </span>
              </a>
           </div>
        </div>
     </div>

     {{-- Form  --}}
     <div class="form-inputs border border-1 p-3 my-3">
        <form onsubmit="formSubmit(event, '{{route('user.updatePassword')}}')">
           <div class="row my-3">
              <div class="col-md-4"> <p class="translate"> Old Password  </p> </div>
              <div class="col-md-8"> 
                 <input 
                    type="password" 
                    placeholder="Enter Old Password" 
                    name="old_password" 
                    class="form-control" 
                    required
                > 
              </div>
           </div>
           <div class="row my-3">
              <div class="col-md-4"> <p class="translate"> New Password  </p> </div>
              <div class="col-md-8"> 
                 <input 
                    type="password" 
                    placeholder="Enter  New Password" 
                    name="new_password" 
                    class="form-control" 
                    required
                    > 
              </div>
           </div>
           <div class="row my-3">
              <div class="col-md-4"> <p class="translate"> Confirm Password  </p> </div>
              <div class="col-md-8"> 
                 <input 
                    type="password" 
                    placeholder="Confirm  Your Password" 
                    name="confirm_password" 
                    class="form-control" 
                    required
                    value="{{old('confirm_password', auth()->user()->confirm_password)}}"
                    > 
              </div>
           </div>
           <div class="text-end">
              <button type="submit" class="btn btn-sm bg-custom text-white mt-2"> <span class="translate">Update</span> </button>
           </div>
        </form>
     </div>
    </div>
@endsection