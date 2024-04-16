<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample product data
        $products = [
            [
                'name' => 'Cartoon Astronaut T-shirts',
                'brand' => 'Adidas',
                'description' => 'Description of Cartoon Astronaut T-shirts',
                'price' => 500,
                'rating' => 5,
                'image' => 'f1.jpg',
            ],
            // Add more sample products here
        ];

        // Insert sample products into the database
        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}