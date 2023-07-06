<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([[
            'name'=>'redmi Mobile',
            'price'=>'Rs. 23000/-',
            'category'=>'Electronics',
            'gallery'=>'https://www.shutterstock.com/image-photo/mobile-smart-phone-on-white-260nw-1311685394.jpg',
            'description'=>'this mobile phone have some awesome features.... ',
        ],
        [
            'name'=>'Iphone',
            'price'=>'Rs. 100000/-',
            'category'=>'Electronics',
            'gallery'=>'https://www.shutterstock.com/image-photo/mobile-smart-phone-on-white-260nw-1311685394.jpg',
            'description'=>'this mobile phone have some awesome features.... ',
        ],
        [
            'name'=>'motorola Mobile',
            'price'=>'Rs. 23000/-',
            'category'=>'Electronics',
            'gallery'=>'https://www.shutterstock.com/image-photo/mobile-smart-phone-on-white-260nw-1311685394.jpg',
            'description'=>'this mobile phone have some awesome features.... ',
        ],
        [
            'name'=>'nokia Mobile',
            'price'=>'Rs. 53000/-',
            'category'=>'Electronics',
            'gallery'=>'https://www.shutterstock.com/image-photo/mobile-smart-phone-on-white-260nw-1311685394.jpg',
            'description'=>'this mobile phone have some awesome features.... ',
        ]]);
    }
}
