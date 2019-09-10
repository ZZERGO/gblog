@extends('dashboard.admin.main')

@section('content')

    <h1>Список пользователей с гражданством: {{ $country->name }} </h1>

    <ul>
        @foreach($countries as $country)

            <li>
                <a href="{{ route('Admin.Country.Edit', $country->id) }}" title="{{ trans('dashboard.edit') }}"> {{ $country->name }} </a>
            </li>

        @endforeach
    </ul>

    <form action="{{ route('Admin.Articles.Add') }}" name="add" method="get">
        {{ csrf_field() }}
        <a href="{{ route('Admin.Users.List') }}"><input type="button" value="{{ trans('pagination.previous') }}"></a>
        <a href="{{ route('Admin.Users.Add', ['country_id' => $country->id]) }}"> <input type="button" value="{{ trans('dashboard.add') }}"> </a>
    </form>



@endsection