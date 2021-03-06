@extends('layouts.default')

@section('pageTitle', 'NUOVO FUMETTO')
    
@section('mainContent')

<main>
    <div class="container" style="display: block">
        <form action="{{ route('comics.update', $comic->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" aria-describedby="title" name="title" value="{{$comic->title}}">         
            </div>

            <div class="mb-3">
              <label for="description" class="form-label">description</label>
              <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{$comic->description}}</textarea>
            </div>
           
            <div class="mb-3">
              <label for="thumb" class="form-label">image url</label>
              <input type="text" class="form-control" id="thumb" aria-describedby="thumb" name="thumb" value="{{$comic->thumb}}">         
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">series</label>
                <input type="text" class="form-control" id="series" aria-describedby="series" name="series" value="{{$comic->series}}">         
              </div>
              <div class="mb-3">
                <label for="sale_date" class="form-label">sale_date</label>
                <input type="text" class="form-control" id="sale_date" aria-describedby="sale_date" name="sale_date" value="{{$comic->sale_date}}">         
              </div>

              <div class="mb-3">
                <label for="type" class="form-label">type</label>
                <input type="text" class="form-control" id="type" aria-describedby="type" name="type" value="{{$comic->type}}">         
              </div>

            <div class="mb-3">
              <label for="price" class="form-label">price</label>
              <input type="number" class="form-control" id="price" aria-describedby="price" name="price" value="{{$comic->price}}" min="1" max="1000">         
            </div>
            <button type="submit" class="btn btn-primary">modifica</button>
        </form>

    </div>
</main>
    
@endsection