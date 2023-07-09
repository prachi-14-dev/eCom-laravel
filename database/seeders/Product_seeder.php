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
            'name'=>'Sony TV',
            'price'=>'41000',
            'category'=>'Electronics',
            'gallery'=>'https://sony.scene7.com/is/image/sonyglobalsolutions/TVFY23_X75L_Primary-Image-1?$S7Product$&fmt=png-alpha',
            'description'=>'this television have some awesome features.... ',
        ],
        [
            'name'=>'Philips smart tv',
            'price'=>'100000',
            'category'=>'Electronics',
            'gallery'=>'https://images.philips.com/is/image/philipsconsumer/4e85edfdb6434cdea535afb200c123e1?$jpglarge$&wid=1250',
            'description'=>'this television have some awesome features.... ',
        ],
        [
            'name'=>'Haier Refrigerator',
            'price'=>'12000',
            'category'=>'Electronics',
            'gallery'=>'https://i.gadgets360cdn.com/products/side-by-side-refrigerator-570-l-hrf-622ks-large-97143-167670-1600246845-1.jpeg',
            'description'=>'this refrigerator have some awesome features.... ',
        ],
        [
            'name'=>'LG Refrigerator',
            'price'=>'16000',
            'category'=>'Electronics',
            'gallery'=>'https://ebvnpurnouvg.cdn.shift8web.com/wp-content/uploads/2023/04/41FRD4z4XL._SX342_SY445_.jpg',
            'description'=>'this refrigerator have some awesome features.... ',
        ]]);
    }
}
