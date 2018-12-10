<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchAction($name)
    {
        $category = Categories::where(['latin_url' => $name])->first();

        if ($category) {
            $goods = Goods::where(['category_id' => $category->id])->get();
            return view('/layouts/goods', ['goods'=> $goods]);
        }
    }
}
}
