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
        DB::table('products')->insert([
            [
                'name'=>'Samsung Galaxy Buds',
                "price"=>"24890 ₸",
                "description"=>"Included with the headphones is a USB Type-C charging cable",
                "category"=>"headphones",
                "gallery"=>"https://images.satu.kz/122102813_w640_h640_naushniki-samsung-galaxy.jpg"
            ],
            [
                'name'=>'Apple Watch',
                "price"=>"231900 ₸",
                "description"=>"A smart watch with much more feature",
                "category"=>"watch",
                "gallery"=>"https://cdn-kaspi.kz/shop/medias/sys_master/images/images/hd1/h9f/26632957427742/apple-watch-series-6-44mm-space-gray-aluminium-case-with-sport-band-m00h3gk-a-cernyj-100568498-1.png"
            ],
            [
                'name'=>'CANON Camera',
                "price"=>"282990 ₸",
                "description"=>"A  camera with much more feature",
                "category"=>"camera",
                "gallery"=>"https://asset.conrad.com/media10/isa/160267/c1/-/en/1674385_LB_00_FB/image.jpg"
            ],
            [
                'name'=>'Apple iPhone 12',
                "price"=>"419000 ₸",
                "description"=>"A phone  with much more feature",
                "category"=>"mobile phone",
                "gallery"=>"https://kaz-shop.net/_sh/2000/200029.jpg"
             ]
        ]);
    }
}
