<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
 
    public function index()
    {
        $categories = Category::all(); 
        return view('categories.index', compact('categories')); 
    }
    
  
    public function edit($id)
    {
        $category = Category::findOrFail($id); 
        return view('categories.edit', compact('category')); 
    }
    
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' =>'required|string|max:255', 
        ]);
        
        $category = Category::find($id); 
        $category->name = $request->name; 
        $category->save(); 
        
        return redirect()->route('categories.index'); 
    }
    
  
    public function delete($id)
    {
        $category = Category::findOrFail($id); 
        $category->delete();
        return redirect()->route('categories.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required|string|max:255', 
        ]);
        
        Category::create($request->all()); 
        
        return redirect()->route('categories.index'); 
    }

    public function create()
    {
        return view('categories.create'); 
    }
}
