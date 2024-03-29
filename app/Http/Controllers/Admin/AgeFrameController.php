<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AgeFrame;
use App\Models\BrandsFrame;
use App\Models\CarModelsFrame;
use App\Models\Question;
use Illuminate\Http\Request;

class AgeFrameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ages = AgeFrame::orderBy('created_at', 'desc')->get();

        return view('admin.age_frame.index', [
            'ages' => $ages
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $car_models = CarModelsFrame::orderBy('created_at', 'desc')->get();
        $barnds = BrandsFrame::orderBy('created_at', 'desc')->get();
        $questions = Question::orderBy('created_at', 'desc')->get();

        return view('admin.age_frame.create', [
            'car_models' => $car_models,
            'brands' => $barnds,
            'questions' => $questions
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
        $age = new AgeFrame();
        $age->title = $request->title;
        $age->description = $request->description;
        $age->name = $request->name;
        $age->img = $request->img;
        $age->model_id = $request->model_id;
        $age->url = $request->url;
        $age->h1 = $request->h1;
        $age->subtitle = $request->subtitle;
        $age->options = $request->options;
        $age->save();

        return redirect()->back()->withSuccess('Поколение добавлено');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AgeFrame  $ageFrame
     * @return \Illuminate\Http\Response
     */
    public function show(AgeFrame $ageFrame)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AgeFrame  $ageFrame
     * @return \Illuminate\Http\Response
     */
    public function edit(AgeFrame $ageframe)
    {
        $car_models = CarModelsFrame::orderBy('created_at', 'desc')->get();
        $brands = BrandsFrame::orderBy('created_at', 'desc')->get();
        $questions = Question::orderBy('created_at')->get();

        return view('admin.age_frame.edit', [
            'brands' => $brands,
            'ageframe' => $ageframe,
            'car_models' => $car_models,
            'options' => $ageframe['options'],
            'questions' => $questions
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AgeFrame  $ageFrame
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AgeFrame $ageframe)
    {
        $ageframe->title = $request->title;
        $ageframe->description = $request->description;
        $ageframe->name = $request->name;
        $ageframe->img = $request->img;
        $ageframe->model_id = $request->model_id;
        $ageframe->url = $request->url;
        $ageframe->h1 = $request->h1;
        $ageframe->subtitle = $request->subtitle;
        $ageframe->options = $request->options;
        $ageframe->update();

        return redirect()->back()->withSuccess('Поколение обновлено');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AgeFrame  $ageFrame
     * @return \Illuminate\Http\Response
     */
    public function destroy(AgeFrame $ageframe)
    {
        $ageframe->delete();
        return redirect()->back()->withSuccess('Поколение удалено');
    }
}
