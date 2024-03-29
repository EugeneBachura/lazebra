<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::orderBy('id','desc')->get();

        return view('admin.gallery.index', [
            'galleries' => $galleries
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$order = (array) json_decode(DB::table('galleries')->where('type', 'main')->pluck('options')->first(), true);
        $gallery = new Gallery();
        $gallery->title = $request->title;
        $gallery->description = $request->description;
        $gallery->name = $request->name;
        $gallery->options = $request->options;
        $gallery->preview = $request->preview;
        $gallery->URL = $request->URL;

        $value = $request->options['value'];
        $count=0;
        foreach ($value as $item) {
            if (($item != null)||($item != ""))
                $count++;
        };
        $gallery->quantity = $count;

        $gallery->save();
        return redirect()->back()->withSuccess('Галерея добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', [
            'gallery' => $gallery
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $gallery->title = $request->title;
        $gallery->description = $request->description;
        $gallery->name = $request->name;
        $gallery->options = $request->options;
        $gallery->preview = $request->preview;
        $gallery->URL = $request->URL;

        $value = $request->options['value'];
        $count=0;
        foreach ($value as $item) {
            if (($item != null)||($item != ""))
                $count++;
        };
        $gallery->quantity = $count;

        $gallery->save();

        return redirect()->back()->withSuccess('Галерея обновлена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();

        return redirect()->back()->withSuccess('Галерея удалена');
    }
}
