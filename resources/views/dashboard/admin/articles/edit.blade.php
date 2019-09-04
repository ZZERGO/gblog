@extends('dashboard.admin.main')

@section('content')
    <h3>Редактирование статьи</h3>
    <h1>{{ $article->title }}</h1>


    <form name="update" action="{{ route('Admin.Articles.Update', $article->id) }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        {{ trans('articles.Title') }}<br>
        <input size="50" type="text" name="title" value="{{ $article->title }}"><br><br>

        {{ trans('articles.shortText') }}:<br>
        <textarea cols="50" rows="5" name="short_text"  >{{ $article->short_text }}</textarea><br><br>

        {{ trans('articles.fullText') }}:<br>
        <textarea cols="50" rows="5" name="full_text">{{ $article->full_text }}</textarea><br><br>

        {{ trans('articles.selectCategory') }}:
        <select name="category_id" required>
            @foreach($categories as $category)
                @if( $category->id == $article->category->id)
                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
            @endforeach
        </select>
        <br><br>
        <input type="submit" value="{{ trans('dashboard.save') }}">
    </form>


@endsection