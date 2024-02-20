<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreIngredientRequest;
use App\Http\Requests\UpdateIngredientsRequest;
use App\Models\Ingredient;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ingredients = Ingredient::all();
        return view('ingredients.index', compact('ingredients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ingredients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIngredientRequest $request)
    {

        $data = $request->validated();
        $new_ingredient = new Ingredient();
        $new_ingredient->name = $data['name'];
        $new_ingredient->is_alcoholic = $data['is_alcoholic'];
        $new_ingredient->slug = Str::slug($new_ingredient->name);
        $new_ingredient->save();
        return redirect()->route('ingredients.show', $new_ingredient->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ingredient $ingredient)
    {
        return view('ingredients.show', compact('ingredient'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ingredient $ingredient)
    {
        return view('ingredients.edit', compact('ingredient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIngredientsRequest $request, Ingredient $ingredient)
    {
        $data = $request->validated();
        $ingredient->slug = Str::slug($ingredient->name);

        $ingredient->update($data);

        return redirect()->route('ingredients.show', compact('ingredient'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
