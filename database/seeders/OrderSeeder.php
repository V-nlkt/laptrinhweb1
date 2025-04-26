<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    const MAX_RECORDS = 100;

    public function run(): void
    {
        // Disable FK checks
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Truncate theo thứ tự: bảng phụ trước
        DB::table('order_detail')->truncate();
        DB::table('orders')->truncate();
        
        // Enable FK checks lại
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        for($i = 1; $i <= self::MAX_RECORDS; $i++) {
            DB::table('orders')->insert([
                [
                    'user_id' => rand(1, 99), 
                    'total_amount' => rand(500, 5000),
                    'address' => 'Address ' . $i,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]);
        }
    }
}
