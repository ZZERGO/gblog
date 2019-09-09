@extends('dashboard.admin.main')

@section('content')

    <h1>Список статей в категории: {{ $category->name }} </h1>

    <ul>
        @foreach($articles as $article)

            <li>
                <a href="{{ route('Admin.Articles.Edit', $article->id) }}" title="{{ trans('dashboard.edit') }}"> {{ $article->title }} </a>
            </li>

        @endforeach
    </ul>

    <form action="{{ route('Admin.Articles.Add') }}" name="add" method="get">
        {{ csrf_field() }}
        <a href="{{ route('Admin.Articles.List') }}"><input type="button" value="{{ trans('pagination.previous') }}"></a>
        <a href="{{ route('Admin.Articles.Add') }}"> <input type="button" value="{{ trans('dashboard.add') }}"> </a>
    </form>



@endsection