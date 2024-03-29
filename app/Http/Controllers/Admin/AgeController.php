<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Age;
use App\Models\Brands;
use App\Models\CarModel;
use App\Models\Question;
use Illuminate\Http\Request;

class AgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ages = Age::orderBy('created_at', 'desc')->get();

        return view('admin.age.index', [
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
        $car_models = CarModel::orderBy('created_at', 'desc')->get();
        $barnds = Brands::orderBy('created_at', 'desc')->get();
        $questions = Question::orderBy('created_at', 'desc')->get();

        return view('admin.age.create', [
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
        $age = new Age();
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
     * @param  \App\Models\Age  $age
     * @return \Illuminate\Http\Response
     */
    public function show(Age $age)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Age  $age
     * @return \Illuminate\Http\Response
     */
    public function edit(Age $age)
    {
        $car_models = CarModel::orderBy('created_at', 'desc')->get();
        $brands = Brands::orderBy('created_at', 'desc')->get();
        $questions = Question::orderBy('created_at')->get();

        return view('admin.age.edit', [
            'brands' => $brands,
            'age' => $age,
            'car_models' => $car_models,
            'options' => $age['options'],
            'questions' => $questions
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Age  $age
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Age $age)
    {
        $age->title = $request->title;
        $age->description = $request->description;
        $age->name = $request->name;
        $age->img = $request->img;
        $age->model_id = $request->model_id;
        $age->url = $request->url;
        $age->h1 = $request->h1;
        $age->subtitle = $request->subtitle;
        $age->options = $request->options;
        $age->update();

        return redirect()->back()->withSuccess('Поколение обновлено');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Age  $age
     * @return \Illuminate\Http\Response
     */
    public function destroy(Age $age)
    {
        $age->delete();
        return redirect()->back()->withSuccess('Поколение удалено');
    }
}
