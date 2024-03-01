@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header translate">{{ __('Please Verify Your Email Address') }}</div>

                <div class="card-body text-center">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                           <h6 class="translate">  {{ __('A fresh verification link has been sent to your email address.') }}</h6>
                        </div>
                    @endif

                    <h6 class="translate"> {{ __('Before proceeding, please check your email for a verification link.') }}</h6>
                    <h6 class="translate"> {{ __('If you did not receive the email') }},</h6>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn bg-custom p-2 mt-3  align-baseline text-white">
                            <span class="translate"> {{ __('Click here to request another') }} </span>    
                        </button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
