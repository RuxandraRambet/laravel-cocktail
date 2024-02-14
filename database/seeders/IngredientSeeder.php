<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $ingredients = [
            'White Rum',
            'Sugar',
            'Lime',
            'Soda Water',
            'Mint',
            'Vodka',
            'Cranberry Juice',
            'Orange Juice',
            'Pineapple Juice',
            'Coconut Cream'
        ];

        foreach ($ingredients as $ingredient) {
            $new_ingredient = new Ingredient();
            $new_ingredient->name = $ingredient;
            $new_ingredient->slug = Str::of($ingredient)->slug('-');
            $new_ingredient->is_alcoholic = $faker->boolean();
            $new_ingredient->save();
        }
    }
}
