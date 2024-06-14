<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Electronics',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Books',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cosmetics',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}