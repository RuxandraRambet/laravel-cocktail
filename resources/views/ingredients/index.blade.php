<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ingredients</title>
    @vite('resources/js/app.js')
</head>

<body>
    <header class="text-center">
        <h1>Ingredients</h1>
        {{-- <a href="{{ route('cocktails.create') }}" class="btn btn-light">Create a New Ingredient</a> --}}
    </header>
    <div class="container my-5">
        <h2>Complete List of All Ingredients</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Ingredients name</th>
                    <th>is_alcoholic</th>
                    <th>Buttons</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ingredients as $ingredient)
                    <tr>
                        <td>{{ $ingredient['name'] }}</td>
                        @if ($ingredient['is_alcoholic'] === 1)
                            <td>Yes</td>
                        @else
                            <td>No</td>
                        @endif
                        <td>
                            <div class="d-flex">
                                <a class="btn btn-primary" href="{{ route('ingredients.show', $ingredient) }}">Show</a>
                                {{-- <a class="btn btn-warning" href="{{ route('cocktails.edit', $cocktail) }}">Edit</a>
                                <form action="{{ route('ingredients.destroy', $ingredient->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="delete" class="btn btn-danger">
                                </form> --}}
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</body>

</html>
