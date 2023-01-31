<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    private function categoriesDB(): array
    {
        $categories = [];
        for ($i = 1; $i <= 5; $i++) {
            $categories[] = fake('ru_RU')->city;
        }
        return $categories;
    }

    private function articlesDB(): array
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
        $html = '';
        foreach ($articles as $id=>$article){
            $link = route('articleDetail',['id'=>$id,'categoryId'=>$catId]);
            $html .= <<<HERE
                <div style="margin-bottom: 20px; padding-bottom: 10px; border-bottom: 1px solid #000;">
                    <div style="font-size:20px; font-weight:bold;margin-bottom: 10px;">
                        <a href="{$link}">{$article['name']}</a>
                    </div>
                    <p>{$article['anons']}</p>
                    <p style="font-style: italic">{$article['date']}</p>
                </div>
                HERE;
        }
        return $html;
    }

    public function show($categoryId, $articleId)
    {
        $article = $this->articlesDB()[$categoryId][$articleId];
        $catUrl = route('category',['id' => $categoryId]);
        return <<<HERE
            <h1>{$article['name']}</h1>
            <p>{$article['descr']}</p>
            <a href="{$catUrl}"><i>в категрию</i></a>
        HERE;

    }

    public function index()
    {
        dd($this->articlesDB());
    }

    public function categoriesList()
    {
        $categories = $this->categoriesDB();
        $html = '';
        foreach ($categories as $id => $cat) {
            $route = route('category',['id' => $id]);
            $html .= '<a href="'.$route.'">'.$cat.'</a><br>';
        }
        return $html;
    }
}
