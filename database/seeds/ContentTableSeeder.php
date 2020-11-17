<?php

use Illuminate\Database\Seeder;

class ContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // テーブルクリア
        DB::table('contents')->truncate();

        // 初期データ(列名をキーとする連想配列)
        $contents = [
            ['account_id' => 1,
                'content_type' => 'profile',
                'content_text' => 'tonamaoです。'],
            ['account_id' => 1,
             'content_type' => 'skill',
                'content_text' => 'Java, PHP'],
            ['account_id' => 1,
                'content_type' => 'contact',
             'content_text' => 'GitHub:xxxx'],
        ];

        // 登録
        foreach ($contents as $content) {
            \App\Content::create($content);
        }
    }
}
