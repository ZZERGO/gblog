@extends('dashboard._layouts.default')

@section('breadcrumbs')
@endsection

<!-- Панель навигации основная слева (navbar-basic-left) -->
@section('navbar-basic-left')
    @include('dashboard.admin._partials.navbar-basic-left')
@endsection

@section('content')
    <h1>Главная страница админки</h1>
@endsection
