<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    const MAX_RECORDS = 100;

    public function run(): void
    {
        // Tắt foreign key để tránh lỗi
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Truncate bảng products
        DB::table('products')->truncate();
        
        // Bật lại foreign key
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        for($i = 1; $i <= self::MAX_RECORDS; $i++) {
            DB::table('products')->insert([
                [
                    'name' => 'Product ' . $i,
                    'image' => 'product' . $i . '.jpg',
                    'price' => rand(100, 1000),
                    'quantity' => rand(1, 100),
                    'description' => Str::random(50),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]);
        }
    }
}
