@extends('layouts.navbar')

@section('main')
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
                            <div class="d-flex gap-2">
                                <a class="btn btn-primary" href="{{ route('ingredients.show', $ingredient) }}">Show</a>
                                <a class="btn btn-secondary" href="{{ route('ingredients.edit', $ingredient) }}">Edit</a>
                                <form action="{{ route('ingredients.destroy', $ingredient) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete" class="btn btn-danger">
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection
