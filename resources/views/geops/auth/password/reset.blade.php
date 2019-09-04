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
                                    <h4 class="heading-primary text-uppercase mb-md">{{ trans('auth.ResetPassword') }}</h4>
                                    @if (session('status'))
                                        <div class="alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    <form action="{{ route('password.request') }}" method="post" role="form">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="token" value="{{ $token }}">

                                        <!-- Ввод E-mail пользователя (email)
                                        <div class="row">
                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <div class="col-md-12">
                                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                        <label for="name">{{ trans('auth.E-MailAddress') }}</label>
                                                        <input type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>
                                                        @if ($errors->has('email'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        -->

                                        <!-- Ввод нового пароля пользователя (new password)-->
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                        <label for="email">{{ trans('auth.NewPassword') }}</label>
                                                        <input type="password" class="form-control" name="password" required>
                                                        @if ($errors->has('password'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Ввод подтверждения нового пароля пользователя (confirm new password)-->
                                        <div class="row">
                                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                                <div class="col-md-12">
                                                    <label for="password-confirm">{{ trans('auth.ConfirmPassword') }}</label>
                                                    <input type="password" class="form-control" name="password_confirmation" required>

                                                    @if ($errors->has('password_confirmation'))
                                                        <span class="help-block">
                                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                            </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Кнопка Отправить -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form name="submit">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ trans('auth.SavePassword') }}
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

@section('123')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('auth.ResetPassword') }}</div>

                    <div class="panel-body">

                        <form class="form-horizontal" role="form" method="POST" action="{{ route('password.request') }}">



                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
