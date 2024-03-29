<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brands;
use App\Models\Gallery;
use App\Models\Question;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brands::orderBy('id','desc')->get();

        return view('admin.brand.index', [
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
        return view('admin.brand.create', [
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
        $brand = new Brands();
        $brand->url = $request->url;
        $brand->name = $request->name;
        $brand->img = $request->img;
        $brand->title = $request->title;
        $brand->h1 = $request->h1;
        $brand->subtitle = $request->subtitle;
        $brand->description = $request->description;
        $brand->options = $request->options;
        /*$brand->model_link = $request->model_link;
        $brand->frame_link = $request->frame_link;*/
        $brand->gallery_id = $request->gallery_id;
        $brand->save();

        return redirect()->back()->withSuccess('Марка добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brands  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brands $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brands  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brands $brand)
    {
        $questions = Question::orderBy('created_at')->get();
        $galleries = Gallery::orderBy('created_at')->get();
        return view('admin.brand.edit', [
            'brand' => $brand,
            'options' => $brand['options'],
            'questions'=>$questions,
            'galleries'=>$galleries
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brands  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brands $brand)
    {
        $brand->url = $request->url;
        $brand->name = $request->name;
        $brand->img = $request->img;
        $brand->title = $request->title;
        $brand->h1 = $request->h1;
        $brand->subtitle = $request->subtitle;
        $brand->description = $request->description;
        $brand->options = $request->options;
        /*$brand->model_link = $request->model_link;
        $brand->frame_link = $request->frame_link;*/
        $brand->gallery_id = $request->gallery_id;
        $brand->save();

        return redirect()->back()->withSuccess('Марка обновлена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brands  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brands $brand)
    {
        $brand->delete();

        return redirect()->back()->withSuccess('Марка удалена');
    }
}
