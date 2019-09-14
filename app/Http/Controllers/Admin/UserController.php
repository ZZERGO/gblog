<?php

namespace App\Http\Controllers\Admin;

use App\Country;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return response()->view('dashboard.admin.users.index', ['users' => $users, 'title'=>'Управление пользователями']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='Добавление пользователя';
        $countries = Country::all();
        return response()->view('dashboard.admin.users.add', ['countries' => $countries, 'title'=>$title]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create($request->all());
        $user->save();
        if ($user->id){
            $message = 'Пользователь успешно добавлен в базу данных';
        } else {
            $message = 'Ошибка выполнения операции!';
        }
        return redirect()->route('Admin.Users.List')->with('message', $message);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $title='Редактирование пользователя ' . $user->name;
        return response()->view('dashboard.admin.users.edit', ['user' => $user, 'title'=>$title]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        return redirect()->route('Admin.Users.List')->with('message', 'Данные пользователя ' .$user->name. ' обновлены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $name = User::find($id)->name;

        User::find($id)->delete();

        return redirect()->route('Admin.Users.List')->with('message', 'Пользователь ' . $name. ' удалён');
    }
}
