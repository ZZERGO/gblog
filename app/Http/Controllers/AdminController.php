<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Mockery\Generator\Method;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        return response()->view('dashboard.admin.main', ['title' => 'Главная страница админки']);
    }

    public function users()
    {

    }

    public function addUser()
    {

    }
}
