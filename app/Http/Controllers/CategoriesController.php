<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Goods;
use App\Categories;
class CategoriesController extends Controller
{
    public function categoryAction($name)
    {
        $category = Categories::where(['latin_url' => $name])->first();

        if ($category) {
            $goods = Goods::where(['category_id' => $category->id])->get();
            return view('/layouts/goods', ['goods'=> $goods]);
        }
    }
}
