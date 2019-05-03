<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();

        return view('categories/index', compact('categories'));
    }

    public function create(){
        return view('categories/create');
    }

    public function store(Request $request){
        //TODO: Validate

        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return view('categories/create');
    }

    public function edit(int $categoryId){
        $category = Category::find($categoryId);
        if($category) {
            return view('categories/edit', compact('category'));
        } else {
            abort(404);
        }
    }

    public function update(Request $request, int $categoryId){
        //TODO: Validate

        $category = Category::find($categoryId);
        if($category) {
            $category->name = $request->name;
            $category->save();

            return view('categories/edit', compact('category'));
        } else {
            abort(404);
        }
    }

    public function delete(int $categoryId){
        $category = Category::find($categoryId);
        if($category) {
            return view('categories/delete', compact('category'));
        } else {
            abort(404);
        }
    }

    public function destroy(Request $request, int $categoryId){
        $category = Category::find($categoryId);
        if($category) {
            $category->delete();

            return redirect()->route('categories.index');
        } else {
            abort(404);
        }
    }
}
