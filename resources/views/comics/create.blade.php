@extends('layouts.default')

@section('pageTitle', 'NUOVO FUMETTO')
    
@section('mainContent')

<main>
    <div class="container" style="display: block">
        <form action="{{ route('comics.store' )}}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="title" name="title" placeholder="Insert title" value="{{old('title')}}">         
              @error('title')
                  <div class="alert alert-danger">
                    {{$message}}
                  </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="description" class="form-label">description</label>
              <textarea name="description" class="form-control" id="description" cols="30" rows="10" value="{{old('description')}}"> {{old('description')}} </textarea>
            </div>
           
            <div class="mb-3">
              <label for="thumb" class="form-label">image url</label>
              <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" aria-describedby="thumb" name="thumb" placeholder="Insert image" value="{{old('thumb')}}">         
              @error('thumb')
                  <div class="alert-danger">
                    {{ $message}}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">series</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" aria-describedby="series" name="series" placeholder="Insert series" value="{{old('series')}}"> 
                @error('series')
                  <div class="alert-danger">
                    {{ $message}}
                  </div>
              @enderror        
              </div>
              <div class="mb-3">
                <label for="sale_date" class="form-label">sale_date</label>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" aria-describedby="sale_date" name="sale_date" placeholder="Insert sale date" value="{{old('sale_date')}}">   
                @error('sale_date')
                  <div class="alert-danger">
                    {{ $message}}
                  </div>
              @enderror      
              </div>

              <div class="mb-3">
                <label for="type" class="form-label">type</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" aria-describedby="type" name="type" placeholder="Insert type" value="{{old('type')}}">  
                @error('type')
                  <div class="alert-danger">
                    {{ $message}}
                  </div>
              @enderror       
              </div>

            <div class="mb-3">
              <label for="price" class="form-label">price</label>
              <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" aria-describedby="price" name="price" placeholder="Insert price" min="1" max="1000" value="{{old('price')}}">  
              @error('price')
                  <div class="alert-danger">
                    {{ $message}}
                  </div>
              @enderror       
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>

    </div>
</main>
    
@endsection