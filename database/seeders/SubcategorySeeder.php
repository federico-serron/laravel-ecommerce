<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            // Celulares y Tablets
            [
                'category_id' => 1,
                'name' => 'Celulares y Smartphones',
                'slug' => Str::slug('Celulares y Smartphones'),
                'color' => true
            ],

            [
                'category_id' => 2,
                'name' => 'Accesorios para celulares',
                'slug' => Str::slug('Accesroios para celulares')
            ],

            [
                'category_id' => 1,
                'name' => 'Smartwatches',
                'slug' => Str::slug('Smartwatches')
            ],

            // Audio y Video
            [
                'category_id' => 2,
                'name' => 'Audio y Video',
                'slug' => Str::slug('Audio y Video')
            ],

            [
                'category_id' => 2,
                'name' => 'Audio ',
                'slug' => Str::slug('Audio')
            ],

            [
                'category_id' => 2,
                'name' => 'Audio para autos',
                'slug' => Str::slug('Audio para autos')
            ],


            // Consola y Videojuegos
            [
                'category_id' => 3,
                'name' => 'Xbox',
                'slug' => Str::slug('Xbox')
            ],

            [
                'category_id' => 3,
                'name' => 'PlayStation',
                'slug' => Str::slug('PlayStation')
            ],

            [
                'category_id' => 3,
                'name' => 'PC',
                'slug' => Str::slug('PC')
            ],

            [
                'category_id' => 3,
                'name' => 'Nintendo',
                'slug' => Str::slug('Nintendo')
            ],


            // Informatica
            [
                'category_id' => 4,
                'name' => 'Laptops',
                'slug' => Str::slug('Laptops')
            ],

            [
                'category_id' => 4,
                'name' => 'PCs Escritorio',
                'slug' => Str::slug('PCs Escritorio')
            ],

            [
                'category_id' => 4,
                'name' => 'Almacenamiento',
                'slug' => Str::slug('Almacenamiento')
            ],

            [
                'category_id' => 4,
                'name' => 'Accesorios computadoras',
                'slug' => Str::slug('Accesorios computadoras')
            ],

            // Moda
            [
                'category_id' => 5,
                'name' => 'Mujeres',
                'slug' => Str::slug('Mujeres'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 5,
                'name' => 'Hombres',
                'slug' => Str::slug('Hombres'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 5,
                'name' => 'Lentes',
                'slug' => Str::slug('Lentes')
            ],

            [
                'category_id' => 5,
                'name' => 'Relojes',
                'slug' => Str::slug('Relojes')
            ]
            
            ];
    
        foreach($subcategories as $subcategory){
            Subcategory::factory(1)->create($subcategory);
        }
    
    }
}
