@extends('dashboard.admin.main')

@section('content')
    <h1>Добавление страны</h1>

    <form action="{{ route('Admin.Country.Save') }}" method="post">
        {{ csrf_field() }}

        <table>

            <tr>
                <td> {{ trans('country.named') }}: </td>
                <td><input type="text" name="name" id="name" placeholder="" required="required" /></td>
            </tr>

            <tr>
                <td> {{ trans('country.alias') }}: </td>
                <td><input type="text" name="alias" id="name" placeholder="" required="required" /></td>
            </tr>

        </table>

        <br>
        <input type="submit" value="{{ trans('country.save') }}">
    </form>
@endsection