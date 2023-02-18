<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Color;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colors = ['white', 'blue', 'red', 'silver'];
        foreach($colors as $color){
            Color::create([
                'name'=>$color
            ]);
        }
    }
}