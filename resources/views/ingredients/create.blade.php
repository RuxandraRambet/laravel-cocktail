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
        <div class="container my-5">
            <h1>Create New Ingredient</h1>
            <form class="row g-3" action="{{ route('ingredients.store') }}" method="POST">
                @csrf
                <div class="col-md-6">
                    <label for="ingredient" class="form-label">Ingredient Name</label>
                    <input type="text" class="form-control" id="ingredient" name="name">
                </div>
                <div class="col-md-6">
                    <h6>Ingredient ABV</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_alcoholic" id="flexRadioDefault1"
                            value="1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_alcoholic" id="flexRadioDefault2"
                            value="0" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            No
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </body>

</html>
