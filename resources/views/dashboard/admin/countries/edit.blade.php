@extends('dashboard.admin.main')

@section('content')

    <h1>Редактирование страны по имени: {{ $country->name }}</h1>

    <form name="edit" action="{{ route('Admin.Country.Edit', $country->id) }}" method="post">
        {{ csrf_field() }}
        <table>
            <tr>
                <td>{{ trans('country.named') }}</td>
                <td><input type="text" name="name" value="{{ $country->name }}"><br></td>
            </tr>
            <tr>
                <td>{{ trans('country.alias') }}</td>
                <td><input type="text" name="alias" value="{{ $country->alias }}"><br></td>
            </tr>

            <tr>
                <td>
                    <input type="submit" value="Сохранить">
                </td>
            </tr>
        </table>


    </form>

@endsection