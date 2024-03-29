<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brands;
use App\Models\CarModel;
use App\Models\Question;
use Illuminate\Http\Request;

class CarModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carmodels = CarModel::orderBy('id','desc')->get();
        $brands = Brands::orderBy('id','desc')->get();

        return view('admin.model.index', [
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
        $brands = Brands::orderBy('created_at', 'desc')->get();
        $questions = Question::orderBy('created_at')->get();

        return view('admin.model.create', [
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
        $model = new CarModel();
        $model->url = $request->url;
        $model->title = $request->title;
        $model->description = $request->description;
        $model->name = $request->name;
        $model->img = $request->img;
        $model->brand_id = $request->brand_id;
        /*$model->model_link = $request->model_link;
        $model->frame_link = $request->frame_link;*/
        $model->h1 = $request->h1;
        $model->subtitle = $request->subtitle;
        $model->options = $request->options;
        $model->save();

        return redirect()->back()->withSuccess('Модель добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarModel  $carModel
     * @return \Illuminate\Http\Response
     */
    public function show(CarModel $carModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarModel  $carModel
     * @return \Illuminate\Http\Response
     */
    public function edit(CarModel $carmodel)
    {
        $brands = Brands::orderBy('created_at', 'desc')->get();
        $questions = Question::orderBy('created_at')->get();

        return view('admin.model.edit', [
            'brands' => $brands,
            'carmodel' => $carmodel,
            'options' => $carmodel['options'],
            'questions' => $questions
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarModel  $carModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarModel $carmodel)
    {
        $carmodel->url = $request->url;
        $carmodel->title = $request->title;
        $carmodel->description = $request->description;
        $carmodel->name = $request->name;
        $carmodel->img = $request->img;
        $carmodel->brand_id = $request->brand_id;
        /*$carmodel->model_link = $request->model_link;
        $carmodel->frame_link = $request->frame_link;*/
        $carmodel->h1 = $request->h1;
        $carmodel->subtitle = $request->subtitle;
        $carmodel->options = $request->options;
        $carmodel->update();
        //return $carModel->model_link;
        return redirect()->back()->withSuccess('Модель обнавлена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarModel  $carModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarModel $carmodel)
    {
        $carmodel->delete();

        return redirect()->back()->withSuccess('Модель удалена');
    }
}
