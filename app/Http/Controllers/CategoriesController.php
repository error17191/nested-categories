<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(Request $request)
    {
        if (!$request->parent_id || !ctype_digit($request->parent_id) || $request->parent_id < 1) {
            return Category::main()->get();
        }
        $parentCategory = Category::find($request->parent_id);
        if (!$parentCategory) {
            return response()->json('NotFound', 404);
        }

        return $parentCategory->children;
    }
}
