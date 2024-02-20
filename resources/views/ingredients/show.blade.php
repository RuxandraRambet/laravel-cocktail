<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cocktails</title>
    @vite('resources/js/app.js')
</head>

<body>
    <header class="text-center">
        <h1>Ingredients</h1>
    </header>
    <div class="container mb-5">
        <div class="card">
            <img src="" class="card-img-top" alt="">
            <div class="card-body">
                <div class="card-title">
                    <h2>{{ $ingredient['name'] }}</h2>
                </div>
                @if ($ingredient['is_alcoholic'])
                    <p>Yes</p>
                @else
                    <p>No</p>
                @endif
            </div>
        </div>
        <a class="btn btn-light mt-3" href="{{ route('ingredients.index') }}">Home</a>
    </div>
</body>

</html>
