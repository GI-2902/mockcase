<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
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
            'user_name' => 'ope01',
            'email' => '1@gmail.com',
            //laravelではパスワードはハッシュ化して保存される
            'password' => Hash::make('password'),
            'postcode' => '9999999',
            'address' => '新浜市',
            'building' => 'sec9',
        ];
        DB::table('users')->insert($param);

        $param = [
            'id' => '2',
            'user_name' => 'ope02',
            'email' => '2@gmail.com',
            'password' => Hash::make('password'),
            'postcode' => '0000000',
            'address' => '米花町',
            'building' => 'ハイドシティホテル屋上',
        ];

        DB::table('users')->insert($param);
        $param = [
            'id' => '3',
            'user_name' => 'ope03',
            'email' => '3@gmail.com',
            'password' => Hash::make('password'),
            'postcode' => '0000000',
            'address' => '米花町',
            'building' => 'ハイドシティホテル屋上',
        ];

        DB::table('users')->insert($param);
        $param = [
            'id' => '4',
            'user_name' => 'ope04',
            'email' => '4@gmail.com',
            'password' => Hash::make('password'),
            'postcode' => '0000000',
            'address' => '米花町',
            'building' => 'ハイドシティホテル屋上',
        ];
        DB::table('users')->insert($param);

        $param = [
            'id' => '5',
            'user_name' => 'ope05',
            'email' => '5@gmail.com',
            'password' => Hash::make('password'),
            'postcode' => '0000000',
            'address' => '米花町',
            'building' => 'ハイドシティホテル屋上',
        ];
        DB::table('users')->insert($param);
    }
}
