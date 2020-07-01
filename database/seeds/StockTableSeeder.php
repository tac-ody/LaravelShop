<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockTableSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
       DB::table('stocks')->truncate(); //2回目実行の際にシーダー情報をクリア
       DB::table('stocks')->insert([
           'name' => '野沢農産 精米 令和元年産 長野県産コシヒカリ(5kg)',
           'detail' => '長野県内で育てたコシヒカリです',
           'fee' => 2558,
           'imgpath' => 'rice.jpg',
       ]);

       DB::table('stocks')->insert([
           'name' => 'HARIO V60ドリップケトル ヘアラインシルバー 実用800ml ガス・IH対応 日本製',
           'detail' => '細口で注ぎやすいケトルです',
           'fee' => 2373,
           'imgpath' => 'hario.jpg',
       ]);

       DB::table('stocks')->insert([
           'name' => 'クリスタルガイザー 500ml × 40本[正規輸入品]',
           'detail' => 'まろやかな味が特徴です',
           'fee' => 1976,
           'imgpath' => 'water.jpg',
       ]);

       DB::table('stocks')->insert([
           'name' => 'ニュートロジャパン ナチュラルチョイス キャット 室内猫用 アダルトチキン 2kg',
           'detail' => '最適な栄養バランスを実現しました',
           'fee' => 2948,
           'imgpath' => 'catfood.jpg',
       ]);

       DB::table('stocks')->insert([
           'name' => 'ディアナチュラ ビタミンC 120粒(60日分)',
           'detail' => '高品質のサプリメントです',
           'fee' => 555,
           'imgpath' => 'dearnatura.jpg',
       ]);

       DB::table('stocks')->insert([
           'name' => 'レック YUNOA アルミ脚 風呂いす 高さ30cm 防カビ・抗菌',
           'detail' => '安心の抗菌・防カビ仕様',
           'fee' => 1609,
           'imgpath' => 'YUNOA.jpg',
       ]);

       DB::table('stocks')->insert([
           'name' => 'キュレル シャンプー 420ml',
           'detail' => '植物由来の有効成分配合のお肌に優しいシャンプーです',
           'fee' => 1100,
           'imgpath' => 'YUNOA.jpg',
       ]);

       DB::table('stocks')->insert([
           'name' => 'LIVE VIDEO 4 Tokai No Rakuda at 国立代々木競技場第一体育館[Blu-ray]',
           'detail' => 'SUPER BEAVERのワンマン公演の模様を収録した映像作品です',
           'fee' => 4387,
           'imgpath' => 'superbeaver.jpg',
       ]);
   }
}
