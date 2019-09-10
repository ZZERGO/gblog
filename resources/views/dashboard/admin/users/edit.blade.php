@extends('dashboard.admin.main')

@section('content')
    <h1>Редактирование пользователя по имени: {{ $user->name }}</h1>

    <form name="edit" action="{{ route('Admin.Users.Edit', $user->id) }}" method="post">
        {{ csrf_field() }}
        <input type="text" name="name" value="{{ $user->name }}"><br>
        <input type="email" name="email" value="{{ $user->email }}"><br>
        <input type="password" name="password" value="{{ $user->password }}"><br>
        <input type="date" name="birthday" value="{{ $user->birthday }}"><br>

        <a href="{{ route('Admin.Users.List') }}"> <input type="button" value="{{ trans('dashboard.cancel') }}"></a>
        <input type="submit" value="Сохранить">
    </form>


@endsection