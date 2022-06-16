@extends('layouts.default')

@section('pageTitle', 'NUOVO FUMETTO')
    
@section('mainContent')

<main>
    <div class="container" style="display: block">
        <form action="{{ route('comics.store' )}}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" aria-describedby="title" name="title" placeholder="Insert title">         
            </div>

            <div class="mb-3">
              <label for="description" class="form-label">description</label>
              <textarea name="description" class="form-control" id="description" cols="30" rows="10"></textarea>
            </div>
           
            <div class="mb-3">
              <label for="thumb" class="form-label">image url</label>
              <input type="text" class="form-control" id="thumb" aria-describedby="thumb" name="thumb" placeholder="Insert image">         
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">series</label>
                <input type="text" class="form-control" id="series" aria-describedby="series" name="series" placeholder="Insert series">         
              </div>
              <div class="mb-3">
                <label for="sale_date" class="form-label">sale_date</label>
                <input type="text" class="form-control" id="sale_date" aria-describedby="sale_date" name="sale_date" placeholder="Insert sale date">         
              </div>

              <div class="mb-3">
                <label for="type" class="form-label">type</label>
                <input type="text" class="form-control" id="type" aria-describedby="type" name="type" placeholder="Insert type">         
              </div>

            <div class="mb-3">
              <label for="price" class="form-label">price</label>
              <input type="number" class="form-control" id="price" aria-describedby="price" name="price" placeholder="Insert price" min="1" max="1000">         
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>

    </div>
</main>
    
@endsection