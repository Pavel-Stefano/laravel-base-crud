@extends('layouts.default')

@section('pageTitle', 'FUMETTO')

    
@section('mainContent')
    <section>
        <div class="container fumetto">
            <div class="image">
                <img src="{{$fumetto->thumb}}" alt="">
            </div>
            <div class="fumetto-content">
                <h1>{{$fumetto->title}}</h1>
                <p>{{$fumetto->description}}</p>
            </div>
        </div>
        

    </section>
    
@endsection