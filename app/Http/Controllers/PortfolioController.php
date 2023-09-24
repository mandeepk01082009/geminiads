<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Portfolio; 

class PortfolioController extends Controller
{
    public function create()    
    {
        $category = Category::all();
        return view('web.portfolio.create',compact('category'));
        
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'sort_col' => 'required|integer|unique',
            'image' => 'required|image',
]);

$portfolio = Portfolio::create([
     'category_id' => $request->category_id,
     'sort_col' => $request->input('sort_col'),
     'image' => '', 
]);


if($request->has('image')) {  
            $file = $request->file('image');
            $extention = $file->getClientOriginalName();
            $filename = time(). '.' . $extention;
            $file->move('storage/',$filename);
            $portfolio->image = $filename;       
    }

    $portfolio->save(); 

return redirect('/covers');     


//return response()->json(['success'=>'Files uploaded successfully.']);

 }

 public function show()
 {   
     $portfolio = Portfolio::OrderBy('sort_col',"ASC")->paginate(10);
     return view('web.admin2.portfolio_table',compact('portfolio'));
     
 }

 public function edit($id)   
    {
        $portfolio = Portfolio::find($id); 
        $category = Category::all();
        return view('web.portfolio.update',compact('portfolio','category'));  
    }

    public function update(Request $request, $id)
    {
        
        $portfolio = Portfolio::find($id);

        $portfolio->category_id = $request->input('category_id');

        $portfolio->sort_col = $request->input('sort_col');
       


        if($request->has('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalName();
            $filename = time(). '.' . $extention;
            $file->move('storage/',$filename);
            $portfolio->image = $filename;       
    }

    $portfolio->update();
    return redirect('/covers');   

    }

    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        $portfolio->delete();
        return redirect()->back(); 

    }

    public function display($id)
    {
        $category = Category::where('id', $id)->get(); 
        $newspaper = Portfolio::orderBy('sort_col', 'ASC')->where('category_id', $id)->paginate(9);  
        return view('newspaper-ads',compact('newspaper','category'));    
    }


}
