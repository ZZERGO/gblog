@extends('dashboard.admin.main')

@section('content')
    <h1>Добавление пользователя</h1>

    @if(Session::has('message'))
        <h2>{!!Session::get('message')!!}</h2>
    @endif

    <form name="register" action="{{ route('Admin.Users.Add') }}" method="post">
        {{ csrf_field() }}




    </form>

    <form action="{{ route('Admin.Users.Add') }}" method="post" name="register">
        {{ csrf_field() }}
        <table>
            <tr>
                <td> {{ trans('users.displayName') }}: </td>
                <td><input type="text" name="name" id="name" placeholder="{{ trans('users.login') }}" required="required" /></td>
            </tr>

            <tr>
                <td> {{ trans('users.firstName') }}: </td>
                <td><input type="text" name="first_name" required="required" /></td>
            </tr>

            <tr>
                <td> {{ trans('users.middleName') }}: </td>
                <td><input type="text" name="middle_name" /></td>
            </tr>

            <tr>
                <td> {{ trans('users.lastName') }}: </td>
                <td><input type="text" name="last_name" /></td>
            </tr>

            <tr>
                <td> {{ trans('users.mobilePhone') }}: </td>
                <td><input type="text" name="phone_mobile" /></td>
            </tr>

            <tr>
                <td> {{ trans('users.birthday') }}: </td>
                <td><input type="date" name="birthday"></td>
            </tr>

            <tr>
                <td> {{ trans('users.country') }}: </td>
                <td>
                    <select name="country_id">
                        @foreach($countries as $country)
                            @if ( ($_GET) && ($_GET['country_id']   == $country->id))
                                <option value="{{ $country->id }}" selected>{{ $country->name }}</option>
                            @else
                                <option value="{{ $country->id }}"> {{ $country->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </td>
            </tr>

            <tr>
                <td> {{ trans('auth.E-MailAddress') }}: </td>
                <td><input type="email" name="email" id="email" placeholder="{{ trans('auth.E-MailAddress') }}" required="required"></td>
            </tr>

            <tr>
                <td> {{ trans('auth.Password') }}: </td>
                <td><input type="password" name="password" id="password" placeholder="{{ trans('auth.Password') }}" required="required" /></td>
            </tr>

            <tr>
                <td colspan="2"> <input type="submit" value="Сохранить"></td>
            </tr>

        </table>
    </form>



@endsection