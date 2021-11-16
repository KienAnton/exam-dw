<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FurnitureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('furniture')->truncate();
        DB::table('furniture')->insert([
                [
                    'name' => 'Ghe 1',
                    'price' => '12000000',
                    'thumbnail' => 'https://aconcept-vn.com/pictures/catalog/product/650002470-NB001.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],[
                    'name' => 'Ghe 2',
                    'price' => '13000000',
                    'thumbnail' => 'https://aconcept-vn.com/pictures/catalog/product/650002470-NB001.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],[
                    'name' => 'Ghe 3',
                    'price' => '13000000',
                    'thumbnail' => 'https://aconcept-vn.com/pictures/catalog/product/650002470-NB001.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],[
                    'name' => 'Ghe 4',
                    'price' => '13000000',
                    'thumbnail' => 'https://aconcept-vn.com/pictures/catalog/product/650002470-NB001.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],[
                    'name' => 'Ghe 5',
                    'price' => '13000000',
                    'thumbnail' => 'https://aconcept-vn.com/pictures/catalog/product/650002470-NB001.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],[
                    'name' => 'Ghe 6',
                    'price' => '13000000',
                    'thumbnail' => 'https://aconcept-vn.com/pictures/catalog/product/650002470-NB001.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],[
                    'name' => 'Ghe 7',
                    'price' => '13000000',
                    'thumbnail' => 'https://aconcept-vn.com/pictures/catalog/product/650002470-NB001.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],[
                    'name' => 'Ghe 8',
                    'price' => '13000000',
                    'thumbnail' => 'https://aconcept-vn.com/pictures/catalog/product/650002470-NB001.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],[
                    'name' => 'Ghe 9',
                    'price' => '13000000',
                    'thumbnail' => 'https://aconcept-vn.com/pictures/catalog/product/650002470-NB001.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],[
                    'name' => 'Ghe 10',
                    'price' => '13000000',
                    'thumbnail' => 'https://aconcept-vn.com/pictures/catalog/product/650002470-NB001.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],[
                    'name' => 'Ghe 11',
                    'price' => '13000000',
                    'thumbnail' => 'https://aconcept-vn.com/pictures/catalog/product/650002470-NB001.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],[
                    'name' => 'Ghe 12',
                    'price' => '13000000',
                    'thumbnail' => 'https://aconcept-vn.com/pictures/catalog/product/650002470-NB001.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]
        );
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
