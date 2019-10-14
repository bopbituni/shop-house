<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Product::create([
            'name' => 'Sweet House',
            'area' => '400m2',
            'status' => 'true',
            'price' => 3000000,
            'title' => 'nhà riêng',
            'content'=>'qwqfqwfq'
        ]);
    }
}
