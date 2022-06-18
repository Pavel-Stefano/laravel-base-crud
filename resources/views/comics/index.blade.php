
@extends('layouts.default')

@section('pageTitle', 'FUMETTI')
    
@section('mainContent')
    <section class="bg_index">
    
        <div id="index_container" class="container">
            <button class="btn btn-ab">Current series</button>
            @foreach ($fumetti as $fumetto)
            <div class="card">
                <a href="{{ route('comics.show', $fumetto->id)}}">
                    <img src="{{$fumetto->thumb}}" alt="{{$fumetto->title}}">
                    <div class="card-content">
                        <h5>{{$fumetto->series}}</h5>
                        <p>{{$fumetto->title}}</p>
                        <div class="card-footer">
                            <span>Price:{{$fumetto->price}} €</span>
                            <a class="modifica" href="{{route('comics.edit', $fumetto->id)}}">MODIFICA</a>
                        </div>
                        
                    </div>
                </a>
            </div>         
            @endforeach

            <button class="btn load"><a href="/" style="color: #fff">Torna alla Home</a></button>
        </div>
        

    </section>
    
@endsection