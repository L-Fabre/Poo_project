<?php

namespace App\Controllers;

use App\Repositories\RecipeRepository;
use App\Core\Router\Request;
use App\Core\View;

class RecipesController
{
    public function show(Request $request, int $id)
    {
        $recipe = (new RecipeRepository())->find($id);
        new View('recipe', compact('recipe')); // ['recipe' => $recipe]
    }
}
