<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title='Список статей';
        $articles = Article::all();
        return response()->view('dashboard.admin.articles.index',
            [
                'articles' => $articles,
                'title'=>$title
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='Добавление статьи';
        $categories = Category::all();
        return response()->view('dashboard.admin.articles.add',
            [
                'categories' => $categories,
                'title'=>$title
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new Article($request->all());
        $article->save();
        if ($article->id){
            $message = 'Новость успешно добавлена в базу данных';
        } else {
            $message = 'Ошибка выполнения операции!';
        }
        return redirect()->route('Admin.Articles.List')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        $categories = Category::all();
        $title='Редактирование статьи';
        return view('dashboard.admin.articles.edit',
            [
                'article' => $article,
                'categories' => $categories,
                'title'=>$title
            ]
        );
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
        $article = Article::find($id);
        if ($article->update($request->all())){
            $message = 'Запись успешно обновлена';

        } else {
            $message = 'Ошибка выполнения операции';
        }
        return redirect()->route('Admin.Articles.List')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $name = $article->name;
        if ($article->delete()){
            return redirect()->route('Admin.Articles.List')->with('message', 'Запись ' . $name. ' успешно удалёна');
        } else {
            die('Ошибка!');
        }
    }
}
