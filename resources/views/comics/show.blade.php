@extends('layouts.default')

@section('pageTitle', 'FUMETTO')

    
@section('mainContent')
    <section>
        <div class="container fumetto">
            <div class="col-3 image">
                <img src="{{$comic->thumb}}" alt="">
            </div>
            <div class="col-9 fumetto-content">
                <h1>{{$comic->title}}</h1>
                <p>{{$comic->description}}</p>
                <div class="fumetto-options">
                    <form action="{{ route('comics.destroy', $comic->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"> Cancella</button>
                    </form>
                </div>
            </div>
            
        </div>
        

    </section>
    
@endsection