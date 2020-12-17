@extends('layouts.template')

@section('content')


 <section class="page-section cta">
    
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Our Registration Page</span>
              <span class="section-heading-lower">Welcome</span>
            </h2>
<div class="login-box">
  <div class="login-logo">
  {{--      <a href=""><b>Welcome </b></a> --}}
   

{{--   <div class="login-box-body" style="border-radius: 30px;">
     <div><center><img src="{{url('/images/logo.png')}}" width="60%" height="60%"></center></div>
     <hr>
   <p class="login-box-msg">Register Your Details Here</p>  --}}


                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class=" col-form-label col-md-12">{{ __('Name') }}</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="phone" class=" col-form-label col-md-12">{{ __('Phone No') }}</label>

                            <div class="col-md-12">
                                <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                     

                        <div class="form-group row">
                            <label for="email" class=" col-form-label col-md-12">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class=" col-form-label col-md-12">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class=" col-form-label col-md-12">{{ __('Confirm Password') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn btn-primary form-control">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        </form>
                </div>
            </div>
       </div>
   </div>
</div>
</div>
</section>




@endsection
