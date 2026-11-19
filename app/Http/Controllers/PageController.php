<?php

namespace App\Http\Controllers;

use App\Data\DishCatalog;

class PageController extends Controller
{
    public function home(DishCatalog $catalog)
    {
        return view('pages.home', [
            'latestDishes' => $catalog->latest(3),
        ]);
    }

    public function about()
    {
        return view('pages.about');
    }
}
