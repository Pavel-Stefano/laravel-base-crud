<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicsController extends Controller
{
    protected $validationRule = [
        'title' => 'required|max:180',
        'thumb' => 'required|max:255',
        'price' => 'numeric|max:20',
        'series' => 'max:100',
        'sale_date' => 'max:50',
        'type' => 'max:50'
    ];
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

    // public function store(Request $request)
    // {
    //     // dump($request);
    //     $data = $request->all();
    //     dump($data);

    //     $newComic = new Comic();
    //     $newComic->title =$data['title'];
    //     if(!empty($data['description'])){
    //         $newComic->description =$data['description'];
    //     }
    //     $newComic->thumb =$data['thumb'];
    //     $newComic->price =$data['price'];
    //     $newComic->series =$data['series'];
    //     $newComic->sale_date =$data['sale_date'];
    //     $newComic->type =$data['type'];
    //     $newComic->save();

    //     return redirect()->route('comics.show', $newComic->id);
    // }
    public function store(Request $request)     //dependence injection
    {
        $request->validate($this->validationRule);
        // dump($request);
        $data = $request->all();
        $newComic = new Comic();

        // $newComic->fill($data);     //prende i dati da fillable
        // $newComic->save();

       

        $newComic = Comic::create($data);  // accorpare la fill e il save con la create

        return redirect()->route('comics.show', $newComic->id);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    // public function show($id)        
    // {
    //     // $fumetto = Comic::findOrFail($id);
    //     // return view('comics.show', compact('fumetto'));

    //     $fumetto = Comic::find($id);
    //     if($fumetto){
    //         return view('comics.show', compact('fumetto'));
    //     }
    //     abort(404);
    // }
    public function show(Comic $comic)       //dependence injection
    {
        return view('comics.show', compact('comic'));
        
        // if($comic){
            
        // }                la dependece injection fanno già quesi conttrolli
        // abort(404);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    // public function edit($id)
    // {
    //     $fumetto = Comic::findOrFail($id);
    //     return view('comics.edit', compact('fumetto'));
    // }
    public function edit(Comic $comic)      //dependence injection
    {
        
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // public function update(Request $request, $id)
    // {
    //     $data = $request->all();
    //     $fumetto = Comic::findOrFail($id);

    //     $fumetto->title =$data['title'];
    //     $fumetto->description =$data['description'];
    //     $fumetto->thumb =$data['thumb'];
    //     $fumetto->price =$data['price'];
    //     $fumetto->series =$data['series'];
    //     $fumetto->sale_date =$data['sale_date'];
    //     $fumetto->type =$data['type'];
    //     $fumetto->save();

    //     return view('comics.show', compact('fumetto'));
    // }
    public function update(Request $request, Comic $comic)      //dependence injection
    {
        $request->validate($this->validationRule);


        $data = $request->all();

        // $comic->title =$data['title'];
        // $comic->description =$data['description'];
        // $comic->thumb =$data['thumb'];
        // $comic->price =$data['price'];
        // $comic->series =$data['series'];
        // $comic->sale_date =$data['sale_date'];
        // $comic->type =$data['type']; 
        // $comic->save();

        $comic->update($data);

        return redirect()->route('comics.show', $comic->id);
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
