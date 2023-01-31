<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $route = route('categories');
        $text = <<<HERE
                <h1>О проекте</h1>
                <p>«Тravel Blog» — это интернет-справочник практической информации
                для туристов. В первую очередь, конечно, о странах — но не только.
                В нем есть ответы на самые разные вопросы, важные для путешественников.</p>
                <p>Почитать все наши статьи можно в <a href="{$route}">категориях</a></p>
                HERE;

        return $text;
    }
}
