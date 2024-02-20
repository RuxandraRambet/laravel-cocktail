@extends('layouts.navbar')

@section('main')
    <div class="container">
        <h1>Modify cocktail: {{ $cocktail->cocktail_name }}</h1>
        <a class="btn btn-light mt-3" href="{{ route('cocktails.index') }}">Home</a>
        <form class="row g-3" action="{{ route('cocktails.update', $cocktail->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="col-md-6">
                <label for="cocktail_name" class="form-label">Cocktail Name</label>
                <input type="text" class="form-control" id="cocktail_name" name="cocktail_name"
                    value="{{ $cocktail->cocktail_name }}">
            </div>
            <div class="col-md-6">
                <label for="abv" class="form-label">Cocktail ABV</label>
                <input type="text" class="form-control" id="abv" name="abv" value="{{ $cocktail->abv }}">
            </div>
            <div class="col-md-6">
                <label for="price" class="form-label">Cocktail Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $cocktail->price }}">
            </div>
            <div class="col-md-6">
                <label for="original_country" class="form-label">Cocktail Original Country</label>
                <input type="text" class="form-control" id="original_country" name="original_country"
                    value="{{ $cocktail->original_country }}">
            </div>

            <div class="col-md-6">
                <label for="exampleFormControlTextarea1" class="form-label">Cocktail Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">
                    {{ $cocktail->description }}
                </textarea>
            </div>
            <div class="col-12">
                <label class="form-label">Ingredienti</label>
                <div>
                    @foreach ($ingredients as $ingredient)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="check-{{ $ingredient->slug }}"
                                value="{{ $ingredient->id }}" name="ingredients[]"
                                {{ $cocktail->ingredients->contains($ingredient->id) ? 'checked' : '' }}>
                            <label class="form-check-label" for="check-{{ $ingredient->slug }}">
                                {{ $ingredient->name }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </form>
    </div>
@endsection
