@extends('dashboard.admin.main')

@section('content')
    <h1>Добавление статьи</h1>

    @if(Session::has('message'))
        <h2>{!!Session::get('message')!!}</h2>
    @endif

    <form name="register" action="{{ route('Admin.Articles.Save') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <input size="50" type="text" name="title" placeholder="{{ trans('articles.Title') }}"><br>

        {{ trans('articles.shortText') }}:<br>
        <textarea cols="50" rows="5" name="short_text" ></textarea><br>

        {{ trans('articles.fullText') }}:<br>
        <textarea cols="50" rows="5" name="full_text"></textarea><br>

        {{ trans('articles.selectCategory') }}:
        <select name="category_id" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <br><br>
        <input type="submit" value="{{ trans('dashboard.save') }}">
    </form>


@endsection