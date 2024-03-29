<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brands;
use App\Models\Gallery;
use App\Models\Page;
use App\Models\PageOption;
use App\Models\Post;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::orderBy('created_at','desc')->get();

        return view('admin.page.index', [
            'pages' => $pages
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
        return view('admin.pages.index', [
            //'options' => $options,
            //'values' => $values,
            'page' => $page,
            'options' => $page['options']
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        /*$options = DB::table('page_options')
            ->where('page_id', '=', $page['id'])
            ->pluck('title','value');*/
        //$values = DB::table('page_options')
        //    ->where('page_id', '=', $page['id'])
        //    ->pluck('value');
        //return (array)$page['options']['description'];
        $galleries = Gallery::orderBy('created_at')->get();
        $questions = Question::orderBy('created_at')->get();
        $brands = Brands::orderBy('created_at')->get();
        $posts = Post::orderBy('created_at')->get();

        return view('admin.page.edit', [
            //'options' => $options,
            //'values' => $values,
            'page' => $page,
            'options' => $page['options'],
            'galleries' => $galleries,
            'questions' => $questions,
            'brands'=> $brands,
            'posts'=> $posts
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        //$page->title = $request->title;
        $page->url = $request->url;
        //$page->options = $request->options;
        //$page->options = DB::table('pages')->where('id', $page['id'])->pluck('options')->first();
        //$page->options = array_merge(json_decode(DB::table('pages')->where('id', $page['id'])->pluck('options')->first(),true),$request->options);
        //$page->options = DB::table('pages')->where('id', $page['id'])->pluck('options');
        //$page->update();
        //$page->save();

        //$page_options = (array) json_decode(DB::table('pages')->where('id', $page['id'])->pluck('options')->first());
        
        //$page_options2 = gettype($page_options);
        //$page_options2 = $page_options2." ".gettype($request->options);
        //$marge = array_merge($page_options,$request->options);
        //$page_options3=stripcslashes($page_options);
        $page->options = $request->options;
        $page->update();
        //return $marge;
        //return request('options');
        //$pageOption->description = $request->description;
        return redirect()->back()->withSuccess('Настройки страницы применены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }
}
