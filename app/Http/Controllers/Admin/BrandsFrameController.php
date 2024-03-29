<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BrandsFrame;
use App\Models\Gallery;
use App\Models\Question;
use Illuminate\Http\Request;

class BrandsFrameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = BrandsFrame::orderBy('id','desc')->get();

        return view('admin.brand_frame.index', [
            'brands' => $brands
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $questions = Question::orderBy('created_at')->get();
        $galleries = Gallery::orderBy('created_at')->get();
        return view('admin.brand_frame.create', [
            'questions'=>$questions,
            'galleries'=>$galleries
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brandsFrame = new BrandsFrame();
        $brandsFrame->url = $request->url;
        $brandsFrame->name = $request->name;
        $brandsFrame->img = $request->img;
        $brandsFrame->title = $request->title;
        $brandsFrame->h1 = $request->h1;
        $brandsFrame->subtitle = $request->subtitle;
        $brandsFrame->description = $request->description;
        $brandsFrame->options = $request->options;
        $brandsFrame->gallery_id = $request->gallery_id;
        $brandsFrame->save();

        return redirect()->back()->withSuccess('Марка добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BrandsFrame  $brandsFrame
     * @return \Illuminate\Http\Response
     */
    public function show(BrandsFrame $brandsFrame)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BrandsFrame  $brandsFrame
     * @return \Illuminate\Http\Response
     */
    public function edit(BrandsFrame $brandsframe)
    {
        $questions = Question::orderBy('created_at')->get();
        $galleries = Gallery::orderBy('created_at')->get();
        return view('admin.brand_frame.edit', [
            'brandsframe' => $brandsframe,
            'options' => $brandsframe['options'],
            'questions'=>$questions,
            'galleries'=>$galleries
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BrandsFrame  $brandsFrame
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BrandsFrame $brandsframe)
    {
        $brandsframe->url = $request->url;
        $brandsframe->name = $request->name;
        $brandsframe->img = $request->img;
        $brandsframe->title = $request->title;
        $brandsframe->h1 = $request->h1;
        $brandsframe->subtitle = $request->subtitle;
        $brandsframe->description = $request->description;
        $brandsframe->options = $request->options;
        $brandsframe->gallery_id = $request->gallery_id;
        $brandsframe->save();

        return redirect()->back()->withSuccess('Марка обновлена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BrandsFrame  $brandsFrame
     * @return \Illuminate\Http\Response
     */
    public function destroy(BrandsFrame $brandsframe)
    {
        $brandsframe->delete();

        return redirect()->back()->withSuccess('Марка удалена');
    }
}
