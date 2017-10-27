@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading"><center>Login</center></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <!--<label for="email" class="col-md-4 control-label">E-Mail Address</label>-->

                            <div class="col-md-6 col-md-offset-3">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <!--<label for="password" class="col-md-4 control-label">Password</label>-->

                            <div class="col-md-6 col-md-offset-3">
                                <input id="password" type="password" class="form-control" name="password" required placeholder="***">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                             <div class="col-md-6 col-md-offset-3">
                                <button type="submit" class="btn btn-primary btn-block">
                                    <i class="fa fa-sign-in" aria-hidden="true"></i>
                                    Login
                                </button>
                                
                                
                                <br>

                               
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                             <br>  <br>
                            <div class="col-md-6 col-md-offset-3">
                                 <a href="{{ url('/auth/facebook') }}" class="btn btn-block btn-social btn-facebook btn-social">
                                    <span class="fa fa-facebook"></span> Sign in with Facebook
                                </a>
                            </div>
                            <br><br>
                             <div class="col-md-6 col-md-offset-3">
                                   <a href="{{ url('/auth/twitter') }}" class="btn btn-block btn-social btn-twitter btn-social">
                                    <span class="fa fa-twitter"></span> Sign in with Twitter
                                </a>
                            </div>
                            <br><br>
                            <div class="col-md-6 col-md-offset-3">
                                <a href="{{ url('/auth/google') }}" class="btn btn-block btn-social btn-google btn-social">
                                    <span class="fa fa-google"></span> Sign in with Google
                                </a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div>
            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
<button type="button" class="btn btn-primary">Primary</button>

<!-- Secondary, outline button -->
<button type="button" class="btn btn-secondary">Secondary</button>

<!-- Indicates a successful or positive action -->
<button type="button" class="btn btn-success">Success</button>

<!-- Contextual button for informational alert messages -->
<button type="button" class="btn btn-info">Info</button>

<!-- Indicates caution should be taken with this action -->
<button type="button" class="btn btn-warning">Warning</button>

<!-- Indicates a dangerous or potentially negative action -->
<button type="button" class="btn btn-danger">Danger</button>

<!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
<button type="button" class="btn btn-link">Link</button>
    </div>

</div>
@endsection
