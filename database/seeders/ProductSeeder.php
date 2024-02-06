<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productsData = [
            ['barcode' => 1234567891011, 'quantity' => 10000, 'user_id' => 1, 'created_at' => '2024-04-20 12:00:00'],
            ['barcode' => 1234567891012, 'quantity' => 10000, 'user_id' => 1, 'created_at' => '2024-02-06 12:00:00'],
            ['barcode' => 1234567891013, 'quantity' => 10100, 'user_id' => 1, 'created_at' => '2024-02-06 12:00:00'],
            ['barcode' => 1234567891014, 'quantity' => 10100, 'user_id' => 1, 'created_at' => '2024-02-06 12:00:00'],
            ['barcode' => 1234567891214, 'quantity' => 10300, 'user_id' => 2, 'created_at' => '2024-02-06 12:00:00'],
            ['barcode' => 1234567895014, 'quantity' => 10110, 'user_id' => 2, 'created_at' => '2024-02-06 12:00:00'],
            ['barcode' => 1234560891014, 'quantity' => 14100, 'user_id' => 2, 'created_at' => '2024-02-06 12:00:00'],
            ['barcode' => 1234767891014, 'quantity' => 12100, 'user_id' => 2, 'created_at' => '2024-02-06 12:00:00'],
        ];

        foreach ($productsData as $productData) {
            Product::create($productData);
        }

        
    }
}
