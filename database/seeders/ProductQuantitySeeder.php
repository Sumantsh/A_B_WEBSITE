<?php

namespace Database\Seeders;

use App\Models\qty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductQuantitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $quantities = [
            ['product_id' => 1, 'quantity' => 10],
            ['product_id' => 1, 'quantity' => 20],
            ['product_id' => 2, 'quantity' => 15],
            // Add more data as needed
        ];

        foreach ($quantities as $quantity) {
            qty::create($quantity);
        }
    }
}
