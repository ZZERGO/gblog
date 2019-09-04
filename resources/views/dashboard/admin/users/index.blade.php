@extends('dashboard.admin.main')

@section('content')

    <div class="row">
        <div class="col-xs-12">
            @if(Session::has('message'))
                <h2>{!!Session::get('message')!!}</h2>
            @endif

            <div class="clearfix">
                <div class="pull-right tableTools-container"></div>
            </div>
            <div class="table-header">
                {{ trans('dashboard.allUsers') }}
            </div>

            <!-- div.table-responsive -->

            <!-- div.dataTables_borderWrap -->
            <div>

                <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>{{ trans('users.displayName') }}</th>
                            <th>{{ trans('users.login') }}</th>
                            <th>{{ trans('users.lastName') }}</th>
                            <th>{{ trans('users.firstName') }}</th>
                            <th>{{ trans('users.middleName') }}</th>
                            <th>{{ trans('users.country') }}</th>
                            <th>{{ trans('users.birthday') }}</th>
                            <th>{{ trans('users.mobilePhone') }}</th>
                            <th>{{ trans('users.createdDate') }}</th>
                            <th>{{ trans('users.status') }}</th>
                            <th>Действие</th>
                        </tr>
                    </thead>

                    <tbody>

                    @foreach($users as $user)
                        <tr>
                            <td>
                                <a href="{{ route('Admin.Users.Edit', $user->id) }}"> {{ $user->name }} </a>
                            </td>
                            <td>{{ $user->login }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>{{ $user->first_name }}</td>
                            <td>{{ $user->middle_name }}</td>
                            <td>
                                <a href="{{ route('Admin.Country.Members', $user->country->id) }}"> {{ $user->country->name }} </a>
                            </td>
                            <td>{{ $user->birthday }}</td>
                            <td>{{ $user->phone_mobile }}</td>
                            <td>{{ $user->created_at }}</td>

                            <td class="hidden-480"><span class="label label-sm label-warning">Активный</span></td>

                            <td>
                                <form action="{{ route('Admin.Users.Delete', $user->id) }}" name="delete" method="post">
                                    {{ csrf_field() }}
                                    <input type="submit" name="delete" value="Удалить">
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>

        <div>
            <a href="{{ route('Admin.Users.Add') }}"><input type="button" value="{{ trans('users.createUser') }}"></a>
        </div>


    </div>

@endsection