@extends('geops._layouts.default')

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
                                    <h4 class="heading-primary text-uppercase mb-md">{{ trans('auth.RegisterAnAccount') }}</h4>
                                    <form action="{{ route('register') }}" method="post" role="form">
                                        {{ csrf_field() }}

                                            <!-- Ввод имени пользователя (login)-->
                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                            <label for="name">{{ trans('auth.Name') }}</label>
                                                            <input id="name" name="name" type="text" value="{{ old('name') }}" class="form-control input-lg">

                                                            @if ($errors->has('name'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('name') }}</strong>
                                                                </span>
                                                            @endif

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        <!-- Ввод E-mail пользователя (email)-->
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                        <label for="email">{{ trans('auth.E-MailAddress') }}</label>
                                                        <input id="email" name="email" type="email" value="{{ old('email') }}" class="form-control input-lg" required>
                                                        @if ($errors->has('email'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Ввод пароля пользователя (password)-->
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <label for="password">{{ trans('auth.Password') }}</label>
                                                    <input id="password" name="password" type="password" value="" class="form-control input-lg" required>
                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="password-confirm">{{ trans('auth.ConfirmPassword') }}</label>
                                                    <input id="password-confirm" name="password_confirmation" type="password" value="" class="form-control input-lg">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <form name="submit">
                                                    <button type="submit" class="btn btn-primary pull-right mb-xl">
                                                        {{ trans('auth.CreateAccount') }}
                                                    </button>
                                                </form>
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
