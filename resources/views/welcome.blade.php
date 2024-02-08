<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cocktails</title>
    @vite('resources/js/app.js')
</head>

<body>
    <header class="text-center">
        <h1>Cocktails</h1>
    </header>
    <div class="container mb-5">
        <h2>Complete List of All Cocktails</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>cocktail_name</th>
                    <th>abv</th>
                    <th>is_alcoholic</th>
                    <th>price</th>
                    <th>description</th>
                    <th>original_country</th>
                </tr>
            </thead>
            <tbody>


                @foreach ($cocktails as $cocktail)
                    <tr>
                        <td>{{ $cocktail['cocktail_name'] }}</td>
                        <td>{{ $cocktail['abv'] }} %</td>
                        @if ($cocktail['is_alcoholic'] === 1)
                            <td>Yes</td>
                        @else
                            <td>No</td>
                        @endif
                        <td>$ {{ $cocktail['price'] }}</td>
                        <td>{{ $cocktail['description'] }}</td>
                        <td>{{ $cocktail['original_country'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</body>

</html>
