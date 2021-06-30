<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                [
                    'name'=>'Samsung SmartTv',
                    'price'=>'200',
                    'description'=>'A SamSung with 4GB ram and much more feture',
                    'category'=>'TV',
                    'gallery'=>'https://cdn.mediamart.vn/Product/smart-tivi-samsung-4k-55-inch-55tu7000-6kr1kc.png'

                ],
                [
                    'name'=>'Fridge HG',
                    'price'=>'200',
                    'description'=>'A fridge with 4GB ram and much more feture',
                    'category'=>'fridge',
                    'gallery'=>'https://salt.tikicdn.com/cache/w444/ts/product/d6/3c/50/f201f0a8baee2ef5ee2adef6ac755c72.jpg'
                ]
            ]
        );
    }
}
