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
            'status' => '普通',
            'description' => 'スタイリッシュなデザインのメンズ腕時計',
            'comment' => '',
        ];
        DB::table('items')->insert($param);

        $param = [
            'id' => '1',
            'item_id' => '2',
            'item_name' => 'HDD',
            'item_image' => 'HDDHardDisk.jpg',
            'brand' => '西芝',
            'price' => '5000',
            'status' => '不良品',
            'description' => '高速で信頼性の高いハードディスク',
            'comment' => '',
        ];
        DB::table('items')->insert($param);

        $param = [
            'id' => '1',
            'item_id' => '3',
            'item_name' => '玉ねぎ3束',
            'item_image' => 'iLoveIMGd.jpg',
            'brand' => 'なし',
            'price' => '300',
            'status' => '超最高',
            'description' => '新鮮な玉ねぎ3束のセット',
            'comment' => '',
        ];
        DB::table('items')->insert($param);

        $param = [
            'id' => '2',
            'item_id' => '4',
            'item_name' => '革靴',
            'item_image' => 'LeatherShoesProductPhoto.jpg',
            'brand' => '',
            'price' => '4000',
            'status' => '悪い',
            'description' => 'クラシックなデザインの革靴',
            'comment' => '',
        ];
        DB::table('items')->insert($param);

        $param = [
            'id' => '2',
            'item_id' => '5',
            'item_name' => 'ノートPC',
            'item_image' => 'LivingRoomLaptop.jpg',
            'brand' => '',
            'price' => '45000',
            'status' => '普通',
            'description' => '高性能なノートパソコン',
            'comment' => '',
        ];
        DB::table('items')->insert($param);

        $param = [
            'id' => '3',
            'item_id' => '6',
            'item_name' => 'マイク',
            'item_image' => 'MusicMic4632231.jpg',
            'brand' => 'なし',
            'price' => '8000',
            'status' => '普通',
            'description' => '高音質のレコーディング用マイク',
            'comment' => '',
        ];
        DB::table('items')->insert($param);

        $param = [
            'id' => '3',
            'item_id' => '7',
            'item_name' => 'ショルダーバッグ',
            'item_image' => 'Pursefashionpocket.jpg',
            'brand' => '',
            'price' => '3500',
            'status' => '普通',
            'description' => 'おしゃれなショルダーバッグ',
            'comment' => '',
        ];
        DB::table('items')->insert($param);

        $param = [
            'id' => '3',
            'item_id' => '8',
            'item_name' => 'タンブラー',
            'item_image' => 'Tumblersouvenir.jpg',
            'brand' => 'なし',
            'price' => '500',
            'status' => '悪い',
            'description' => '使いやすいタンブラー',
            'comment' => '',
        ];
        DB::table('items')->insert($param);

        $param = [
            'id' => '4',
            'item_id' => '9',
            'item_name' => 'コーヒーミル',
            'item_image' => 'WaitresswithCoffeeGrinder.jpg',
            'brand' => 'starbacks',
            'price' => '4000',
            'status' => '悪い',
            'description' => '手動のコーヒーミル',
            'comment' => '',
        ];
        DB::table('items')->insert($param);

        $param = [
            'id' => '5',
            'item_id' => '10',
            'item_name' => 'メイクセット',
            'item_image' => 'make.jpg',
            'brand' => '',
            'price' => '2500',
            'status' => '良好',
            'description' => '便利なメイクアップセット',
            'comment' => '',
        ];
        DB::table('items')->insert($param);
    }
}
