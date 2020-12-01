<?php

use Illuminate\Database\Seeder;

class WorkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // テーブルクリア
        DB::table('works')->truncate();

        // 初期データ(列名をキーとする連想配列)
        $works = [
            ['account_id' => 1,
                'title' => 'SameGame',
                'description' => 'This is a puzzle game named Same Game.',
                'link' => 'https://tonamao.github.io/SameGame/',
                'img_path' => 'test-full-samegame.png',
                'tags' => 'JavaScript'],
            ['account_id' => 1,
                'title' => 'お絵描きボード',
                'description' => 'This is a board where can draw anything freely.',
                'link' => 'https://tonamao.github.io/OekakiBorad/',
                'img_path' => 'test-full-samegame.png',
                'tags' => 'JavaScript'],
            ['account_id' => 1,
                'title' => 'MyPortfolio',
                'description' => 'This is a web application for portfolio.',
                'link' => '#mypoerfolio',
                'img_path' => 'test-full-samegame.png',
                'tags' => 'Laravel,Vue'],
            ['account_id' => 1,
                'title' => '大富豪',
                'description' => 'This is a trump game called DAIFUGO in Japan.',
                'link' => '#daifugo',
                'img_path' => 'test-full-samegame.png',
                'tags' => 'CodeIgniter'],
        ];

        // 登録
        foreach ($works as $work) {
            \App\Work::create($work);
        }
    }
}
