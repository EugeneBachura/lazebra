<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BrandsFrame;
use App\Models\CarModelsFrame;
use App\Models\Question;
use Illuminate\Http\Request;

class CarModelsFrameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carmodels = CarModelsFrame::orderBy('id','desc')->get();
        $brands = BrandsFrame::orderBy('id','desc')->get();

        return view('admin.model_frame.index', [
            'carmodels' => $carmodels,
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
        $brands = BrandsFrame::orderBy('created_at', 'desc')->get();
        $questions = Question::orderBy('created_at')->get();

        return view('admin.model_frame.create', [
            'brands'=>$brands,
            'questions'=>$questions
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
        $model = new CarModelsFrame();
        $model->url = $request->url;
        $model->title = $request->title;
        $model->description = $request->description;
        $model->name = $request->name;
        $model->img = $request->img;
        $model->brand_id = $request->brand_id;
        $model->h1 = $request->h1;
        $model->subtitle = $request->subtitle;
        $model->options = $request->options;
        $model->save();

        return redirect()->back()->withSuccess('Модель добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarModelsFrame  $carModelsFrame
     * @return \Illuminate\Http\Response
     */
    public function show(CarModelsFrame $carmodelsframe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarModelsFrame  $carModelsFrame
     * @return \Illuminate\Http\Response
     */
    public function edit(CarModelsFrame $carmodelsframe)
    {
        $brands = BrandsFrame::orderBy('created_at', 'desc')->get();
        $questions = Question::orderBy('created_at')->get();

        return view('admin.model_frame.edit', [
            'brands' => $brands,
            'carmodel' => $carmodelsframe,
            'options' => $carmodelsframe['options'],
            'questions' => $questions
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarModelsFrame  $carModelsFrame
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarModelsFrame $carmodelsframe)
    {
        $carmodelsframe->url = $request->url;
        $carmodelsframe->title = $request->title;
        $carmodelsframe->description = $request->description;
        $carmodelsframe->name = $request->name;
        $carmodelsframe->img = $request->img;
        $carmodelsframe->brand_id = $request->brand_id;
        $carmodelsframe->h1 = $request->h1;
        $carmodelsframe->subtitle = $request->subtitle;
        $carmodelsframe->options = $request->options;
        $carmodelsframe->update();
        return redirect()->back()->withSuccess('Модель обнавлена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarModelsFrame  $carModelsFrame
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarModelsFrame $carmodelsframe)
    {
        $carmodelsframe->delete();

        return redirect()->back()->withSuccess('Модель удалена');
    }
}
