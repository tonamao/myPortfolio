<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // テーブルクリア
        DB::table('users')->truncate();

        // 初期データ(adminユーザ)
        $users = [
            ['id' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('password'),
                'role' => 1],
        ];

        // 登録
        foreach ($users as $user) {
            \App\User::create($user);
        }
    }
}
