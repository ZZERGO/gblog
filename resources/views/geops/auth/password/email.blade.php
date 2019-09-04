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

                                    @if (session('status'))
                                        <div class="alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                    @else
                                        <h4 class="heading-primary text-uppercase mb-md">{{ trans('auth.InputEmailForResetMyPassword') }}</h4>
                                        <form action="{{ route('password.email') }}" method="post">
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
                                                <div class="col-md-6">
                                                    <span></span>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="submit" value="{{ trans('auth.SendPasswordResetLink') }}" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">
                                                </div>
                                            </div>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
