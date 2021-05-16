<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('slider.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $s =Slider::get();
        return view('slider.create',['s'=>$s]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('image')) {
            $image = $request->file('image');
           $filename = time().'.'.$image->getClientOriginalExtension();
           $destinationPath = public_path('image/slider/');
            $img = Image::make($image->getRealPath());
            $img->save($destinationPath . '/' . $filename);
            $request->image = $filename;
       
       
    $n = New Slider;
    $n->title =$request->title;
    $n->imageUrl =$request->image;
    //$n->price =$request->price;
    $n->description =$request->description;
    $n->status =0;
    $n->save(); 
    $request->session()->flash('success', 'successfuly !');
    return back(); 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $s=Slider::find($id);
        return view('slider.edit',['s'=>$s]);
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
        $s=Slider::find($id);
        $s->title =$request->title;
   // $s->price =$request->price;
    $s->description =$request->description;
    $s->save();
    $request->session()->flash('success', 'successfuly !');
    return redirect()->action('App\Http\Controllers\SliderController@create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Slider::destroy($id);
        //$request->session()->flash('success', 'successfuly !');
        return back();
    }

    public function setToLive(Request $request, $id)
    {
        $s=Slider::find($id);
        $s->status =1;
        $s->save();
        $request->session()->flash('success', 'successfuly !');
        return redirect()->action('App\Http\Controllers\SliderController@create');
    }

    public function removeFromLive(Request $request, $id)
    {
        $s=Slider::find($id);
        $s->status =0;
        $s->save();
        $request->session()->flash('success', 'successfuly !');
        return redirect()->action('App\Http\Controllers\SliderController@create');
    }
}
