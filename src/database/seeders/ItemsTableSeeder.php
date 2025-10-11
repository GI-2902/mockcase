<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'id' => '10',
            'item_id' => '10',
            'item_name' => 'ゆきさくら',
            'item_image' => '遊戯王2.jpg',
            'brand' => 'konmai',
            'price' => '100',
            'category_id' => '1',
            'status' => 'good',
            'description' => 'yes',
        ];
        DB::table('items')->insert($param);

        $param = [
            'id' => '20',
            'item_id' => '20',
            'item_name' => '夕日',
            'item_image' => 'mv.jpg',
            'brand' => 'konmai',
            'price' => '1000',
            'category_id' => '2',
            'status' => 'bad',
            'description' => 'no',
        ];
        DB::table('items')->insert($param);
    }
}
