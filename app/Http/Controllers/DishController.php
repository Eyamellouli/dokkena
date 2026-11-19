<?php

namespace App\Http\Controllers;

use App\Data\DishCatalog;

class DishController extends Controller
{
    public function index(DishCatalog $catalog)
    {
        return view('dishes.index', [
            'dishes' => $catalog->all(),
        ]);
    }

    public function show(DishCatalog $catalog, int $id)
    {
        $dish = $catalog->find($id);

        if ($dish === null) {
            abort(404); // plat inconnu
        }

        return view('dishes.show', [
            'id' => $id,
            'dish' => $dish,
        ]);
    }
}
