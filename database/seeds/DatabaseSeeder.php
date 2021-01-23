<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);

        // Content読み込み
        $this->call(ContentTableSeeder::class);

        // Work読み込み
        $this->call(WorkTableSeeder::class);
    }
}
