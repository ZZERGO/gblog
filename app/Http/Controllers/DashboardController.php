<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $title='Рабочая область';
        return response()->view('dashboard.main', ['title'=>$title]);
    }
}
