<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductCategory::create([ 'id' => 1, 'name' => 'Food' ]);
        ProductCategory::create([ 'id' => 2, 'name' => 'Beverages' ]);
    }
}
