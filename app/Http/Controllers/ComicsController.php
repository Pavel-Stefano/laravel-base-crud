<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fumetti = Comic::all();
        return view('comics.index', compact('fumetti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dump($request);
        $data = $request->all();
        dump($data);

        $newComic = new Comic();
        $newComic->title =$data['title'];
        if(!empty($data['description'])){
            $newComic->description =$data['description'];
        }
        $newComic->thumb =$data['thumb'];
        $newComic->price =$data['price'];
        $newComic->series =$data['series'];
        $newComic->sale_date =$data['sale_date'];
        $newComic->type =$data['type'];
        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fumetto = Comic::findOrFail($id);

        return view('comics.show', compact('fumetto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fumetto = Comic::findOrFail($id);
        return view('comics.edit', compact('fumetto'));
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
        $data = $request->all();
        $fumetto = Comic::findOrFail($id);

        $fumetto->title =$data['title'];
        $fumetto->description =$data['description'];
        $fumetto->thumb =$data['thumb'];
        $fumetto->price =$data['price'];
        $fumetto->series =$data['series'];
        $fumetto->sale_date =$data['sale_date'];
        $fumetto->type =$data['type'];
        $fumetto->save();

        return view('comics.show', compact('fumetto'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fumetto = Comic::findOrFail($id);
        $fumetto->delete();
        return redirect()->route('comics.index');
    }
}
