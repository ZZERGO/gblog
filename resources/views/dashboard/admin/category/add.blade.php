@extends('dashboard.admin.main')

@section('content')
    <h1>{{ trans('categories.adding') }}</h1>

    <form action="{{ route('Admin.Category.Save') }}" method="post">
        {{ csrf_field() }}

        {{ trans('categories.Name') }}: <br>
        <input type="text" name="name" id="name" placeholder="" required="required" />

        <br><br>
        <input type="submit" value="{{ trans('dashboard.save') }}">
    </form>
@endsection