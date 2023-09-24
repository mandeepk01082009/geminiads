<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;   

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response  
     */
    public function index()     
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()    
    {
        return view('web.slider.create');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
    'video' => 'required|mimes:mp4',
]);

$slider = Slider::create([  
     'video' => '',   
]);


if($request->has('video')) {
    $file = $request->file('video');
    $extention = $file->getClientOriginalName();
    $filename = time(). '.' . $extention;
    $file->move('storage/',$filename);
    $slider->video = $filename;       
}

$slider->save();

return redirect('/view');     


// return response()->json(['success'=>'Files uploaded successfully.']);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $slider = Slider::all();
        return view('web.admin2.slider_table',compact('slider'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)   
    {
        $slider = Slider::find($id);
        return view('web.slider.updateslider')->with('slider',$slider);   

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slider = Slider::find($id);
        if($request->has('video')) {
            $file = $request->file('video');
            $extention = $file->getClientOriginalName();
            $filename = time(). '.' . $extention;
            $file->move('storage/',$filename);
            $slider->video = $filename;       
    }

    $slider->save();
    return redirect('/view'); 
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sliders = Slider::find($id);
        $sliders->delete();
        return redirect('/view'); 

    }
}
