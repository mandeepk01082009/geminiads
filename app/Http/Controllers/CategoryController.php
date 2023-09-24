<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Category;

class CategoryController extends Controller
{
    public function create()    
    {
        return view('web.category.create');  
    }

     public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'heading' => 'required|string|max:255',
            'content' => 'required',
            'sort_col' => 'required|integer|unique',
            'banner' => 'required|image',
            'image' => 'required|image',  
]);

$category = Category::create([ 
     'name' => $request->input('name'),
     'heading' => $request->input('heading'),
     'content' => $request->input('content'),
     'sort_col' => $request->input('sort_col'),
     'banner' => '',   
     'image' => '',      
]);


if($request->has('banner')) {  
    $file = $request->file('banner');
    $extention = $file->getClientOriginalName();
    $filename = time(). '.' . $extention;
    $file->move('storage/',$filename);
    $category->banner = $filename;       
}

if($request->has('image')) {  
            $file = $request->file('image');
            $extention = $file->getClientOriginalName();
            $filename = time(). '.' . $extention;
            $file->move('storage/',$filename);
            $category->image = $filename;       
    }

    $category->save(); 

return redirect('/categories');     


//return response()->json(['success'=>'Files uploaded successfully.']);


    }

public function show()
    {
        $category = Category::orderBy('sort_col', 'asc')->get();
        return view('web.admin2.category_table',compact('category'));
        
    }


public function edit($id)   
    {
        $category = Category::find($id);
        return view('web.category.update')->with('category',$category);  
    }

public function update(Request $request, $id)
    {
        $category = Category::find($id);

        $category->name = $request->input('name');

        $category->heading = $request->input('heading');

        $category->content = $request->input('content');

        $category->sort_col = $request->input('sort_col');

        if($request->has('banner')) {
            $file = $request->file('banner');
            $extention = $file->getClientOriginalName();
            $filename = time(). '.' . $extention;
            $file->move('storage/',$filename);
            $category->banner = $filename;       
    }

        if($request->has('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalName();
            $filename = time(). '.' . $extention;
            $file->move('storage/',$filename);
            $category->image = $filename;       
    }

    $category->update();
    return redirect('/categories');

    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/categories'); 

    }
}


        
