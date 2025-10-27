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
            'id' => '1',
            'item_id' => '1',
            'item_name' => '腕時計',
            'item_image' => 'ArmaniMensClock.jpg',
            'brand' => 'Rolax',
            'price' => '15000',
            'category' => '腕時計',
            'status' => '普通',
            'description' => 'スタイリッシュなデザインのメンズ腕時計',
        ];
        DB::table('items')->insert($param);

        $param = [
            'id' => '1',
            'item_id' => '2',
            'item_name' => 'HDD',
            'item_image' => 'HDDHardDisk.jpg',
            'brand' => '西芝',
            'price' => '5000',
            'category' => '家電',
            'status' => '不良品',
            'description' => '高速で信頼性の高いハードディスク',
        ];
        DB::table('items')->insert($param);

        $param = [
            'id' => '1',
            'item_id' => '3',
            'item_name' => '玉ねぎ3束',
            'item_image' => 'iLoveIMGd.jpg',
            'brand' => 'なし',
            'price' => '300',
            'category' => '野菜',
            'status' => '超最高',
            'description' => '新鮮な玉ねぎ3束のセット',
        ];
        DB::table('items')->insert($param);

        $param = [
            'id' => '2',
            'item_id' => '4',
            'item_name' => '革靴',
            'item_image' => 'LeatherShoesProductPhoto.jpg',
            'brand' => '',
            'price' => '4000',
            'category' => '靴',
            'status' => '悪い',
            'description' => 'クラシックなデザインの革靴',
        ];
        DB::table('items')->insert($param);

        $param = [
            'id' => '2',
            'item_id' => '5',
            'item_name' => 'ノートPC',
            'item_image' => 'LivingRoomLaptop.jpg',
            'brand' => '',
            'price' => '45000',
            'category' => '家電',
            'status' => '普通',
            'description' => '高性能なノートパソコン',
        ];
        DB::table('items')->insert($param);

        $param = [
            'id' => '3',
            'item_id' => '6',
            'item_name' => 'マイク',
            'item_image' => 'MusicMic4632231.jpg',
            'brand' => 'なし',
            'price' => '8000',
            'category' => '楽器',
            'status' => '普通',
            'description' => '高音質のレコーディング用マイク',
        ];
        DB::table('items')->insert($param);

        $param = [
            'id' => '3',
            'item_id' => '7',
            'item_name' => 'ショルダーバッグ',
            'item_image' => 'Pursefashionpocket.jpg',
            'brand' => '',
            'price' => '3500',
            'category' => 'バッグ',
            'status' => '普通',
            'description' => 'おしゃれなショルダーバッグ',
        ];
        DB::table('items')->insert($param);

        $param = [
            'id' => '3',
            'item_id' => '8',
            'item_name' => 'タンブラー',
            'item_image' => 'Tumblersouvenir.jpg',
            'brand' => 'なし',
            'price' => '500',
            'category' => '食器',
            'status' => '悪い',
            'description' => '使いやすいタンブラー',
        ];
        DB::table('items')->insert($param);

        $param = [
            'id' => '4',
            'item_id' => '9',
            'item_name' => 'コーヒーミル',
            'item_image' => 'WaitresswithCoffeeGrinder.jpg',
            'brand' => 'starbacks',
            'price' => '4000',
            'category' => '器具',
            'status' => '悪い',
            'description' => '手動のコーヒーミル',
        ];
        DB::table('items')->insert($param);

        $param = [
            'id' => '5',
            'item_id' => '10',
            'item_name' => 'メイクセット',
            'item_image' => 'make.jpg',
            'brand' => '',
            'price' => '2500',
            'category' => '化粧品',
            'status' => '良好',
            'description' => '便利なメイクアップセット',
        ];
        DB::table('items')->insert($param);
    }
}
