
@extends('layouts.default')

@section('pageTitle', 'FUMETTI')
    
@section('mainContent')
    <section class="bg_index">
    
        <div id="index_container" class="container">
            <button class="btn btn-ab">Current series</button>
            @foreach ($comics as $comic)
            <div class="card">
                <a href="{{ route('comics.show', $comic->id)}}">
                    <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                    <div class="card-content">
                        <h5>{{$comic->series}}</h5>
                        <p>{{$comic->title}}</p>
                        <span>Price:{{$comic->price}}</span>
                        <a href="{{route('comics.edit', $comic->id)}}">MODIFICA</a>
                    </div>
                </a>
            </div>         
            @endforeach

            <button class="btn load"><a href="/">Torna alla Home</a></button>
        </div>
        

    </section>
    
@endsection