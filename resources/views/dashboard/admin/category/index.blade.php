@extends('dashboard.admin.main')

@section('content')

    <h1>{{ trans('categories.List') }}</h1>

    <div class="row">
        <div class="col-xs-12">
            @if(Session::has('message'))
                <h2>{!!Session::get('message')!!}</h2>
            @endif

            <div class="clearfix">
                <div class="pull-right tableTools-container"></div>
            </div>
            <div class="table-header">
                {{ trans('categories.List') }}
            </div>

            <!-- div.table-responsive -->

            <!-- div.dataTables_borderWrap -->
            <div>

                <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>{{ trans('categories.Name') }}</th>
                        <th>{{ trans('dashboard.action') }}</th>
                    </tr>
                    </thead>

                    <tbody>

                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td><a href="{{ route('Admin.Category.Edit', $category->id) }}"> {{ $category->name }} </a></td>

                            <td>
                                <form action="{{ route('Admin.Category.Delete', $category->id) }}" name="delete" method="post">
                                    {{ csrf_field() }}
                                    <input type="submit" name="delete" value="{{ trans('categories.Delete') }}">
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>

        <div>
            <a href="{{ route('Admin.Category.Add') }}"><input type="button" value="{{ trans('categories.Add') }}"></a>
        </div>


    </div>
@endsection