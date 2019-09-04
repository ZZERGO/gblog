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
                {{ trans('country.all') }}
            </div>

            <!-- div.table-responsive -->

            <!-- div.dataTables_borderWrap -->
            <div>

                <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>{{ trans('country.named') }}</th>
                        <th>{{ trans('country.alias') }}</th>
                        <th>{{ trans('dashboard.action') }}</th>
                    </tr>
                    </thead>

                    <tbody>

                    @foreach($countries as $country)
                        <tr>
                            <td>{{ $country->id }}</td>
                            <td><a href="{{ route('Admin.Country.Edit', $country->id) }}"> {{ $country->name }} </a></td>
                            <td>{{ $country->alias }}</td>

                            <td>
                                <form action="{{ route('Admin.Country.Delete', $country->id) }}" name="delete" method="post">
                                    {{ csrf_field() }}
                                    <input type="submit" name="delete" value="{{ trans('country.delete') }}">
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>

        <div>
            <a href="{{ route('Admin.Country.Add') }}"><input type="button" value="{{ trans('country.add') }}"></a>
        </div>


    </div>

@endsection