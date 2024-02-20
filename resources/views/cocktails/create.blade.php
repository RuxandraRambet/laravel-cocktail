@extends('layouts.navbar')

@section('main')
    <div class="container">
        <h1>Create New Cocktail</h1>
        <form class="row g-3" action="{{ route('cocktails.store') }}" method="POST">
            @csrf

            <div class="col-md-6">
                <label for="cocktail_name" class="form-label">Cocktail Name</label>
                <input type="text" class="form-control" id="cocktail_name" name="cocktail_name">
            </div>
            <div class="col-md-6">
                <label for="abv" class="form-label">Cocktail ABV</label>
                <input type="text" class="form-control" id="abv" name="abv">
            </div>
            <div class="col-md-6">
                <label for="price" class="form-label">Cocktail Price</label>
                <input type="number" class="form-control" id="price" name="price">
            </div>
            <div class="col-md-6">
                <label for="original_country" class="form-label">Cocktail Original Country</label>
                <input type="text" class="form-control" id="original_country" name="original_country">
            </div>

            <div class="col-md-6">
                <label for="exampleFormControlTextarea1" class="form-label">Cocktail Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
            </div>
            <div class="col-12">
                <label class="form-label">Ingredienti</label>
                <div>
                    @foreach ($ingredients as $ingredient)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="check-{{ $ingredient->slug }}"
                                value="{{ $ingredient->id }}" name="ingredients[]"
                                {{ in_array($ingredient->id, old('ingredients', [])) ? 'checked' : '' }}>
                            <label class="form-check-label" for="check-{{ $ingredient->slug }}">
                                {{ $ingredient->name }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
