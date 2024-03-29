@extends('layouts.navbar')

@section('main')
    <div class="container mb-5">
        <div class="card">
            <img src="" class="card-img-top" alt="">
            <div class="card-body">
                <div class="card-title">
                    <h2>{{ $cocktail['cocktail_name'] }}</h2>
                </div>
                @if (count($cocktail->ingredients))
                    <div class="ingredients">
                        @foreach ($cocktail->ingredients as $ingredient)
                            <span class="badge bg-secondary">{{ $ingredient->name }}</span>
                        @endforeach
                    </div>
                @else
                    <div class="ingredients">
                        <span class="badge bg-secondary">No ingredients</span>
                    </div>
                @endif
                <p>{{ $cocktail['abv'] }}</p>
                <hr>
                <p>{{ $cocktail['is_alcoholic'] }}</p>
                <hr>
                <p>{{ $cocktail['price'] }}</p>
                <hr>
                <p>{{ $cocktail['description'] }}</p>
                <hr>
                <p>{{ $cocktail['original_country'] }}</p>
            </div>
        </div>
        <a class="btn btn-light mt-3" href="{{ route('cocktails.index') }}">Home</a>
    </div>
@endsection
