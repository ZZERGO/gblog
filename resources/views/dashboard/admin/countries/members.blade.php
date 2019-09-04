@extends('dashboard.admin.main')

@section('content')

    <h1>Список пользователей с гражданством: {{ $country->name }} </h1>

    <ul>
        @foreach($users as $user)
            <li>
                <a href="{{ route('Admin.Users.Edit', $user->id) }}" title="{{ trans('dashboard.edit') }}"> {{ $user->name }} </a></li>
        @endforeach
    </ul>

    <form action="{{ route('Admin.Users.Add') }}" name="add" method="get">
        {{ csrf_field() }}
        <a href="{{ route('Admin.Country.List') }}"><input type="button" value="{{ trans('pagination.previous') }}"></a>
        <a href="{{ route('Admin.Users.Add') }}"> <input type="button" value="{{ trans('dashboard.add') }}"> </a>
    </form>



@endsection