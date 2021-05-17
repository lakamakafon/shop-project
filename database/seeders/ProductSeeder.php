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
        //
        DB::table('products')->insert([
            [
                'name'=>'Telefon LG 8GB RAM',
                'price'=>'2000',
                'manufacturer' =>'LG',
                'model' =>'LG 5',
                'code'=>'LG123123',
                'description'=>'najlepszy LG na rynku',
                'short_description'=>'krótki opis',
                'category'=>'telefony',
                'gallery'=>'https://i.wpimg.pl/315x0/m.komorkomania.pl/g6-d1-f39edbb03db3df9b138748ac62.jpg'
            ],
            [
                'name'=>'telefon Oppo 4GB RAM',
                'price'=>'2500',
                'manufacturer' =>'Oppo',
                'model' =>'OPPO 3',
                'code'=>'OPPO123123',
                'description'=>'najlepszy OPPO na rynku',
                'short_description'=>'krótki opis',
                'category'=>'telefony',
                'gallery'=>'https://image.oppo.com/content/dam/oppo/common/mkt/v2-2/a15/navigation/A15-navigation-blue-v2.png'
            ],
            [
                'name'=>'XIAOMI 2GB RAM',
                'price'=>'3000',
                'manufacturer' =>'XIAOMI',
                'model' =>'XIAOMI 2',
                'code'=>'XIAOMI12314444',
                'description'=>'najlepszy XIAOMI na rynku',
                'short_description'=>'krótki opis',
                'category'=>'telewizory',
                'gallery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVLsz6KJ_LR5sE5wZ-fdhVne-i7wQFmh5K8A&usqp=CAU'
            ],
            [
                'name'=>'SAMSUNG 16GB RAM',
                'price'=>'7000',
                'manufacturer' =>'SAMSUNG',
                'model' =>'S100X',
                'code'=>'SAMSUNG5734',
                'description'=>'najlepszy SAMUSNG na rynku',
                'short_description'=>'krótki opis',
                'category'=>'drukarki',
                'gallery'=>'https://i4.skapiec.pl/1/sQSktkraW1hZ2VzLzZhZGIyY2NhM2EzMzA3MWZhNzc1OWRkZTAyNzMzMzkyLmpwZ5GTCaZiY2I5NDQG/samsung-galaxy-s10-128gb-dual-sim-czarny.jpg'
            ],
        ]);
    }
}
