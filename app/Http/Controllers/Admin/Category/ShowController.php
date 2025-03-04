<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Contracts\View\Factory as ViewFactory;

class ShowController extends Controller
{
    public function __invoke(Category $category, ViewFactory $view_factory)
    {
        return $view_factory->make('admin.category.show', ['category' => $category]);
    }
}
