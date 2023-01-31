<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Http\Controllers\ArticlesController;

class CategoriesTop extends Component
{
    private array $categories;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $articles = new ArticlesController();
        $this->categories = $articles->categoriesDB();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.CategoriesTop',['categories'=>$this->categories]);
    }
}
