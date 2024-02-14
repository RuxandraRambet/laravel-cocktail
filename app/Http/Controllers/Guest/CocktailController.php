<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Cocktail;
use Illuminate\Http\Request;
use App\Models\Ingredient;

class CocktailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cocktails = Cocktail::all();
        return view('cocktails.index', compact('cocktails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ingredients = Ingredient::all();

        return view('cocktails.create' , compact('ingredients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $cocktail = new Cocktail();
        $cocktail->cocktail_name = $data['cocktail_name'];
        $cocktail->abv = $data['abv'];
        $cocktail->is_alcoholic = $data['is_alcoholic'];
        $cocktail->price = $data['price'];
        $cocktail->description = $data['description'];
        $cocktail->original_country = $data['original_country'];

        $cocktail->save();

        return redirect()->route('cocktails.show', $cocktail->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cocktail $cocktail)
    {
        return view('cocktails.show', compact('cocktail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cocktail $cocktail)
    {
        $ingredients = Ingredient::all();
        return view('cocktails.edit', compact('cocktail', 'ingredients'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cocktail $cocktail)
    {
        $data = $request->all();
        $cocktail->update($data);
        return redirect()->route('cocktails.show', $cocktail->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cocktail $cocktail)
    {
        $cocktail->delete();
        return redirect()->route('cocktails.index');
    }
}
