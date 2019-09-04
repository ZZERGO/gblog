@extends(env('THEME') . '._layouts.default')

@section('page-header')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-3">
                <div class="featured-boxes">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="featured-box featured-box-primary align-left mt-xlg">
                                <div class="box-content">
                                    <h4 class="heading-primary text-uppercase mb-md">{{ trans('auth.SignInData') }}</h4>
                                    <form action="{{ route('login') }}" method="post">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label>{{ trans('auth.E-MailAddress') }}</label>
                                                    <input id="email" name="email" type="email" value="{{ old('email') }}" class="form-control input-lg" required>
                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <a class="pull-right" href="{{ route('password.request') }}">{{ trans('auth.ForgotPassword') }}</a>
                                                    <label>{{ trans('auth.Password') }}</label>
                                                    <input  id="password" name="password" type="password"  value="" class="form-control input-lg" required>

                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <span class="remember-box checkbox">
                                                    <label for="rememberme">
                                                        <input type="checkbox" id="rememberme" name="rememberme" {{ old('rememberme') ? 'checked' : '' }}>{{ trans('auth.RememberMe') }}
                                                    </label>
                                                </span>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="submit" value="{{ trans('auth.login') }}" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
