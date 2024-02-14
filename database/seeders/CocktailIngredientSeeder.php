<?php

namespace Database\Seeders;

use App\Models\Cocktail;
use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CocktailIngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Seleziona tutti i progetti e tutte le tecnologie esistenti
        $cocktails = Cocktail::all();
        $ingredients = Ingredient::all();

        // Cicla su ogni progetto
        foreach ($cocktails as $cocktail) {
            // in questo caso scegliamo un numero tra 1 e la metà delle tecnologie disponibili
            $numberOfIngredients = rand(1, $ingredients->count());
            // $numberOfIngredients = 5;

            // Prendi un numero casuale di tecnologie
            $numberOfIngredients = $ingredients->random($numberOfIngredients);

            // Associa le tecnologie selezionate al progetto
            $cocktail->ingredients()->attach($numberOfIngredients);
        }
    }
}
