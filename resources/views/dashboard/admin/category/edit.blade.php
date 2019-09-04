@extends('dashboard.admin.main')

@section('content')

    <h1>{{ trans('categories.Editing') }}</h1>
    <form action="{{ route('Admin.Category.Update', $category->id) }}" method="post">
        {{ csrf_field() }}

        {{ trans('categories.Name') }}: <br>
        <input type="text" name="name" id="name" required="required" value="{{ $category->name }}"/>

        <br><br>
        <input type="submit" value="{{ trans('dashboard.save') }}">
    </form>

@endsection