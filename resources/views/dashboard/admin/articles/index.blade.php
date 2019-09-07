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
                {{ trans('articles.All') }}
            </div>

            <!-- div.table-responsive -->

            <!-- div.dataTables_borderWrap -->
            <div>

                <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>{{ trans('articles.Title') }}</th>
                            <th>{{ trans('articles.Category') }}</th>
                            <th>{{ trans('articles.Author') }}</th>
                            <th>{{ trans('dashboard.action') }}</th>
                            <th>ID</th>
                        </tr>
                    </thead>

                    <tbody>

                    @foreach($articles as $article)
                        <tr>
                            <td><a href="{{ route('Admin.Articles.Edit', $article->id) }}"> {{ $article->title }} </a></td>
                            <td><a href="{{ route('Admin.Cat')') }}">{{ $article->category->name }}</a></></td>
                            <td>{{ $article->user->last_name }}</td>

                            <td>
                                <form action="{{ route('Admin.Articles.Delete', $article->id) }}" name="delete" method="post">
                                    {{ csrf_field() }}
                                    <input type="submit" name="delete" value="{{ trans('articles.Delete') }}">
                                </form>
                            </td>
                            <td>{{ $article->id }}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>

        <div>
            <a href="{{ route('Admin.Articles.Add') }}"><input type="button" value="{{ trans('articles.Add') }}"></a>
        </div>


    </div>

@endsection