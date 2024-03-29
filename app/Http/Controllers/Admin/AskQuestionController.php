<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AskQuestion;
use Illuminate\Http\Request;

class AskQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asks = AskQuestion::orderBy('created_at', 'DESC')->get();

        return view('admin.question.ask.index', [
            'asks' => $asks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ask = new AskQuestion();
        $ask->name = $request->name;
        $ask->email = $request->email;
        $ask->text = $request->text;
        $ask->read = false;
        $ask->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AskQuestion  $ask
     * @return \Illuminate\Http\Response
     */
    public function show(AskQuestion $ask)
    {
        $ask->read = true;
        $ask->update();
        return view('admin.question.ask.show', [
            'ask' => $ask
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AskQuestion  $ask
     * @return \Illuminate\Http\Response
     */
    public function edit(AskQuestion $ask)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AskQuestion  $ask
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AskQuestion $ask)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AskQuestion  $ask
     * @return \Illuminate\Http\Response
     */
    public function destroy(AskQuestion $ask)
    {
        $ask->delete();
        return redirect()->back()->withSuccess('Марка удалена');
    }
}
