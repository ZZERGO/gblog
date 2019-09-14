<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title='Список категорий';
        $categories = Category::all();
        return response()->view('dashboard.admin.category.index', ['categories' => $categories, 'title'=>$title]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='Добавление категории';
        return response()->view('dashboard.admin.category.add', ['title'=>$title]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category($request->all());
        $category->save();
        if ($category->id){
            $message = 'Запись успешно добавлена';
        } else {
            $message = 'Произошла ошибка при выполнеии операции';
        }
        return redirect()->route('Admin.Category.Index')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        $title='Статьи в категории ' . $category->name;
        $articles = $category->articles()->where('category_id', '=', $id)->get();
        return response()->view('dashboard.admin.category.members',
            [
                'articles' => $articles,
                'category' => $category,
                'title'=>$title
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        $title='Редактирование категории ' . $category->name;
        return view('dashboard.admin.category.edit', ['category'=>$category, 'title'=>$title]);
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

        if (Category::find($id)->update($request->all())){
            $message = 'Запись успешно обновлена';
        } else {
            $message = 'Ошибка выполнения операции';
        }
        return redirect()->route('Admin.Category.Index')->with('message', $message);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete;
        $name = $category->name;
        if ($category->delete()){
            return redirect()->route('Admin.Category.Index')->with('message', 'Запись ' . $name. ' успешно удалёна');
        } else {
            die('Ошибка!');
        }
    }
}
