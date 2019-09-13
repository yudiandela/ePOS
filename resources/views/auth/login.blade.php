@extends('layouts.MasterAuth')

@section('content')
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="{{ route('login') }}" method="post">
      @csrf

      <div class="form-group has-feedback @error('email') has-error @enderror">
        <input name="email" type="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @error('email')
          <span class="help-block">{{ $message }}</span>
        @enderror
      </div>

      <div class="form-group has-feedback @error('password') has-error @enderror">
        <input name="password" type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @error('password')
          <span class="help-block">{{ $message }}</span>
        @enderror
      </div>

      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      @if (Route::has('register'))
      <p>- OR -</p>
      {{-- <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a> --}}
        <a href="{{ route('register') }}">Register a new membership</a>
      @endif
    </div>
    <!-- /.social-auth-links -->

    {{-- <a href="#">I forgot my password</a><br> --}}

  </div>
  <!-- /.login-box-body -->
@endsection
