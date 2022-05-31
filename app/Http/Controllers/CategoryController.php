<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::latest()->simplePaginate(3);

        return view('category.list',['categories' => $categories]);

    }

    public function addcategory(){
        return view('category.addnew');
    }

    public function store(Request $request){
        // validate data
        $request->validate([
            'title'=>'required|unique:categories|max:200'
        ]);


        $category = new Category;
        $category->title = $request->title;

        $category->save();

        return  redirect('showcategory')->withSuccess('new category created');
    }

    public function edit($id){
        $category = Category::where('id',$id)->first();
        return view('category.edit',compact('category'));

    }

    public function update(Request $request, $id){
        $category = Category::where('id',$id)->first();

        $category->title = $request->title;

        $category->save();

        return redirect('showcategory');
    }

    public function delete($id){
        $category = Category::whereId($id)->first();

        $category->delete();

        return redirect('showcategory');
    }
}
