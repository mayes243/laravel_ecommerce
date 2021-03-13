<!-- yo chaii login.blade.php ko file -->
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center" >
        <div class="col-md-8" >
            <div class="card" style="background:linear-gradient(rgba(0,0,100,0.03),rgba(0,0,90,0.03)); margin-top:30%; width:450px;">
                <div class="card-header" style="background-color:skyblue;">{{ __('Login') }}</div>
                @if(Session::has('error'))
                <span style="color:red; font-family:'',cursive;" id="message" >{{Session::get('error')}}</span>
                @endif
                <div class="card-body"style="background-image: url({{asset('admin/images/j8.pn')}}); background-size: cover; background-color:#eef8f999;" >
                    <form method="POST" action="{{route('logincheck')}}">
                        {{@csrf_field()}}
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" >
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember_me" id="remember">

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script type="text/javascript">
    $(function(){
      setTimeout(function(){
        $('#message').remove()},3000);
    })
  </script>
@endsection
