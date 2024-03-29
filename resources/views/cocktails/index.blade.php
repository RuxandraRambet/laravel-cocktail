@extends('layouts.navbar')

@section('main')

    <body>
        <div class="container mb-5">
            <h2>Complete List of All Cocktails</h2>

            <div class="container p-0">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>cocktail_name</th>
                            <th>abv</th>
                            <th>is_alcoholic</th>
                            <th>price</th>
                            <th>description</th>
                            <th>original_country</th>
                            <th>buttons</th>
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
                                <td>
                                    <div class="d-flex">
                                        <a class="btn btn-primary" href="{{ route('cocktails.show', $cocktail) }}">Show</a>
                                        <a class="btn btn-warning" href="{{ route('cocktails.edit', $cocktail) }}">Edit</a>
                                        <form action="{{ route('cocktails.destroy', $cocktail->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="delete" class="btn btn-danger">
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

    </body>
@endsection
