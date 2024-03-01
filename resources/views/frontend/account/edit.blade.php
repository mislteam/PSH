@extends('layouts.frontend')
@section('title', 'Account Setting')
@section('content')
    @include('frontend.layouts.parts.general-banner', ['title' => "Account Edit"])
    <div class="container my-3" style="min-height : 50vh">
        {{-- Wallet address --}}
      <div class="d-flex justify-content-between">
        <div>
           <h3 class="fw-bold translate"> Account Information </h3>
        </div>
        <div>
           <div class="text-end">
              <a href="{{url()->previous()}}" class="btn btn-sm bg-custom text-white mb-3 w-100">  
                 <span class="translate">Back</span>
              </a>
           </div>
        </div>
     </div>

     {{-- Form  --}}
     <div class="form-inputs border border-1 p-3 my-3">
        <form onsubmit="formSubmit(event, '{{route('user.accountUpdate')}}')">
           <div class="row my-3">
              <div class="col-md-4"> <p class="translate"> Full Name  </p> </div>
              <div class="col-md-8"> 
                 <input 
                    type="text" 
                    placeholder="Enter Your Full Name" 
                    name="name" 
                    class="form-control translate" 
                    required
                    value="{{old('name', auth()->user()->name)}}"
                > 
              </div>
           </div>
           <div class="row my-3">
              <div class="col-md-4"> <p class="translate"> Phone Number  </p> </div>
              <div class="col-md-8"> 
                 <input 
                    type="text" 
                    placeholder="Enter Your Phone Number" 
                    name="phone" 
                    class="form-control translate" 
                    required
                    value="{{old('phone', auth()->user()->phone)}}"
                    > 
              </div>
           </div>
           <div class="text-end">
              <button type="submit" class="btn btn-sm bg-custom text-white mt-2"> <span class="translate"> Update </span> </button>
           </div>
        </form>
     </div>
    </div>
@endsection