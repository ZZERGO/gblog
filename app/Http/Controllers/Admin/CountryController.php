<?php

namespace App\Http\Controllers\Admin;

use App\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title='Список стран';
        $countries = Country::all();
        return response()->view('dashboard.admin.countries.index', ['countries' => $countries, 'title'=>$title]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='Добавление страны';
        return response()->view('dashboard.admin.countries.add', ['title'=>$title]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $country = new Country($request->all());
        $country->save();
        if ($country->id){
            $message = 'Запись успешно добавлена';
        } else {
            $message = 'Произошла ошибка при выполнеии операции';
        }
        return redirect()->route('Admin.Country.List')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $country = Country::find($id);
        $title='Список сотрудников с гражданством ' . $country->name;
        $members = $country->users;
        return view('dashboard.admin.countries.members', ['users' => $members, 'country' => $country, 'title'=>$title]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title='Редактирование страны';
        $country = Country::find($id);
        return response()->view('dashboard.admin.countries.edit', ['country' => $country, 'title'=>$title]);
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
        if (Country::find($id)->update($request->all())){
            $message = 'Запись успешно обновлена';
        } else {
            $message = 'Ошибка выполнения операции';
        }
        return redirect()->route('Admin.Country.List')->with('message', $message);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country = Country::find($id);
        $name = $country->name;
        if ($country->delete()){
            return redirect()->route('Admin.Country.List')->with('message', 'Запись ' . $name. ' успешно удалёна');
        } else {
            die('Ошибка!');
        }
    }
}
