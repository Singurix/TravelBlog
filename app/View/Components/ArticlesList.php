<?php

namespace App\View\Components;

use App\Http\Controllers\ArticlesController;
use Illuminate\View\Component;

class ArticlesList extends Component
{
    private array $articles;
    private int $catId;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($articles, $catId)
    {
        $this->articles = $articles;
        $this->catId = $catId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.articles-list', [
            'articles' => $this->articles,
            'catId' => $this->catId
        ]);
    }
}
