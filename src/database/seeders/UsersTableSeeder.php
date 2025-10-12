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
            'id' => '10',
            'user_name' => 'ope01',
            'email' => 'a@gmail.com',
            //laravelではパスワードはハッシュ化して保存される
            'password' => Hash::make('password'),
            'postcode' => '9999999',
            'address' => '新浜市',
            'building' => 'sec9',
        ];
        DB::table('users')->insert($param);

        $param = [
            'id' => '20',
            'user_name' => 'ope02',
            'email' => 'b@gmail.com',
            'password' => Hash::make('password'),
            'postcode' => '0000000',
            'address' => '米花町',
            'building' => 'ハイドシティホテル屋上',
        ];
        DB::table('users')->insert($param);
    }
}
