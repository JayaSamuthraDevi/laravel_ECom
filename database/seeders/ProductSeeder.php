<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
            'name'=>' mobile',
            'price'=>"200",
            'description'=>"good",
            "category"=>"mobile",
            "gallery"=>"https://images.unsplash.com/photo-1598327105666-5b89351aff97?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fG1vYmlsZSUyMHBob25lfGVufDB8fDB8fHww&w=1000&q=80"
            ],
            [
                'name'=>'B Tv',
                'price'=>"500",
                'description'=>"good",
                "category"=>"Tv",
                "gallery"=>"https://www.mylloyd.com/media/products/zoom21811.jpg"
            ],
            [
                'name'=>'C Fridge',
                'price'=>"300",
                'description'=>"good",
                "category"=>"Fridge",
                "gallery"=>"https://wallmantra.com/cdn/shop/products/wallmantra-fridge-stickers-beautiful-flower-butterfly-kitchen-fridge-sticker-30024906703014.jpg?v=1628641193"
            ],
            [
                'name'=>'D laptop',
                'price'=>"400",
                'description'=>"good",
                "category"=>"laptop",
                "gallery"=>"https://imgeng.jagran.com/images/2023/mar/best%20laptops1679305053832.jpg"
            ],

    
    
        ]);
    }
}
