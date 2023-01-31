<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function categoriesDB(): array
    {
        $categories = [];
        for ($i = 1; $i <= 5; $i++) {
            $categories[] = fake('ru_RU')->city;
        }
        return $categories;
    }

    public function articlesDB(): array
    {
        $categories = $this->categoriesDB();
        $articles = [];
        foreach ($categories as $catId => $category){
            for ($i = 1; $i <= 4; $i++) {
                $articles[$catId][] = [
                    'category' => $category,
                    'date' => fake()->date('d-m-Y'),
                    'name' => fake('ru_RU')->name,
                    'anons' => fake('ru_RU')->text(250),
                    'descr' => fake('ru_RU')->text(2000),
                ];
            }
        }
        return $articles;
    }

    public function getArticlesByCat($catId)
    {
        $articles = $this ->articlesDB()[$catId];
        return \View('articles.section',['articles'=>$articles, 'catId'=>$catId]);
    }

    public function show($categoryId, $articleId)
    {
        $article = $this->articlesDB()[$categoryId][$articleId];
        return \View(
            'articles.detail',
            ['article' => $article, 'catId' => $categoryId, 'id' => $articleId]
        );
    }

    public function index()
    {
        dd($this->articlesDB());
    }

    public function categoriesList()
    {
        $categories = $this->categoriesDB();
        return \View(
            'articles.categories',
            ['categories' => $categories]
        );
    }
}
