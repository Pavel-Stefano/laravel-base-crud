@extends('layouts.default')

@section('pageTitle', 'FUMETTO')

    
@section('mainContent')
    <section>
        <div class="container fumetto">
            <div class="image">
                <img src="{{$comic->thumb}}" alt="">
            </div>
            <div class="comic-content">
                <h1>{{$comic->title}}</h1>
                <p>{{$comic->description}}</p>
            </div>
        </div>
        

    </section>
    
@endsection