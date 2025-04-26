<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    const MAX_RECORDS = 100;

    public function run(): void
    {
        DB::table('order_detail')->truncate();

        for($i = 1; $i <= self::MAX_RECORDS; $i++) {
            DB::table('order_detail')->insert([
                [
                    'order_id' => rand(1, 99), // giả sử có sẵn 30 đơn hàng
                    'product_id' => rand(1, 99), // giả sử có sẵn 50 sản phẩm
                    'quantity' => rand(1, 10),
                    'notes' => 'Note for order detail ' . $i,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]);
        }
    }
}
