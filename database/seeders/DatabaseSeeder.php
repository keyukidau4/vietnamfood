<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'id' => "1",
            'name' => "User",
            'email' => "user@yahoo.com",
            'password' =>Hash::make(1234),
        ]);

        DB::table('administrators')->insert([
            'id' => "1",
            'name' => "Admin",
            'email' => "admin@yahoo.com",
            'password' =>Hash::make(1234),
        ]);

           //Thêm thức ăn
           DB::table('foods')->insert([
            'namevn' => "Chả lụa",
            'namejp' => "ベトナムのハム",
            'price' => "480",
            'image' => "images/1v3ova1I2VqBKvmJXD6JejY2NUaeMbaXnXK59Jop.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'namevn' => "Mẹt bò",
            'namejp' => "牛セット",
            'price' => "1980",
            'image' => "images/1nvwNfOGbHcFq4iVAzMXGq0dzTdRtVoo1kRANFS7.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'namevn' => "Mẹt heo",
            'namejp' => "豚セット",
            'price' => "1980",
            'image' => "images/vB4GJGDT5CgeL1TS4vJkpbbnsYEMFILZHle7fgTj.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'namevn' => "Gỏi sứa",
            'namejp' => "クラゲサラダ",
            'price' => "780",
            'image' => "images/CHI98OGodjJvb9Ns8W9udI2XHynGfpdVLui1wb9Z.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'namevn' => "Bún bò giò",
            'namejp' => "ブンボー",
            'price' => "780",
            'image' => "images/cSArAgrlVtwQS1Vaa1d1ac7TjEAj5IbYNeCx1Tnl.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'namevn' => "Mì xào hải sản",
            'namejp' => "海鮮焼きそば",
            'price' => "680",
            'image' => "images/fSAKTCnu4ftPtU4zY2l8UFyhhQr8T5ZJbT90VMe0.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'namevn' => "Ốc xào sả ớt",
            'namejp' => "タニシレモングラス",
            'price' => "780",
            'image' => "images/GD22L88lxEWSjB9D514vYKSwlu3FC9FQufxEJtLv.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'namevn' => "Trứng non cháy tỏi",
            'namejp' => "卵の子ニンニクソース炒め",
            'price' => "680",
            'image' => "images/Ifsn9J7S58rlzVBTV33hq0QjXbgGamwnC5loMclh.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'namevn' => "Sò lụa xào sả",
            'namejp' => "アサリレモングラス炒め",
            'price' => "480",
            'image' => "images/il1F1GhaL1OzVbuuWZOE7zZ3mVA4JWVZEMH5bGhY.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'namevn' => "Râu mực chiên",
            'namejp' => "げそから",
            'price' => "480",
            'image' => "images/iLcxhVevYu7aDzxGKa1ZIkEm2Gy7Q2FAtjI8g23B.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'namevn' => "Cơm sườn",
            'namejp' => "豚ニンニクソース炒めご飯",
            'price' => "780",
            'image' => "images/IvS6AmSHOlmQseTVByUC5hCScGIgIlF7jmxZR9gH.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'namevn' => "Bún thịt nướng",
            'namejp' => "焼肉ビーフン",
            'price' => "680",
            'image' => "images/iwlYdRhn7WdrcEAncl2ZBMkN3uWP3kID2X3ESdZ2.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'namevn' => "Đuôi heo hon",
            'namejp' => "豚テールレモングラス煮込み",
            'price' => "540",
            'image' => "images/kaXxuu7biZMJD1jXTVtaCX8QcEfkYV5Ftz2lNJFa.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'namevn' => "Mẹt hải sản",
            'namejp' => "海鮮セット",
            'price' => "1980",
            'image' => "images/kfXKspSEZ4fS5xEuyIjVyBOHiAV0L7uSAYyyNH94.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'namevn' => "Heo luộc cuốn bánh tráng",
            'namejp' => "豚肉茹でると野菜巻き",
            'price' => "980",
            'image' => "images/klx2MnOCodY5ESZdkpu9Fw9yIY3kzTwQEnlsh2ff.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'namevn' => "Gà luộc",
            'namejp' => "鳥茹でる",
            'price' => "480",
            'image' => "images/KMP95GzhtjsXPMRI6gRiuxLe05x05Vj6CcqwNBR6.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'namevn' => "Nồi trường",
            'namejp' => "豚のコブクロ",
            'price' => "680",
            'image' => "images/KYn4GByYh4mj2e3GHGnBu3ndLQW3BXOZU2UU41QW.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'namevn' => "Vịt hon",
            'namejp' => "ダックレモングラス煮込み",
            'price' => "780",
            'image' => "images/L1VeU3Fjv0ZWE5fltd2EfMV0xA5dfaT5b9d7my2g.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'namevn' => "Mẹt gà",
            'namejp' => "鳥セット",
            'price' => "1980",
            'image' => "images/lsJLWkX73XsU8fz44hxHQ0Z7Hm58ZTCLu3ZCdl5U.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'namevn' => "Típ bò",
            'namejp' => "牛煮込み",
            'price' => "780",
            'image' => "images/MxZbXkwHcFkqCnrqQe2zmjeUz0dO7MPkQvQ2D2AG.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'namevn' => "Ốc om chuối",
            'namejp' => "タニシバナナ煮込み",
            'price' => "850",
            'image' => "images/o4Zc1b5ZujrhaXB8fUa78Bp50pLwzZk7exHgwFup.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'namevn' => "Thịt heo nướng",
            'namejp' => "豚焼肉",
            'price' => "480",
            'image' => "images/O9DgaXcvoYWdVt8Y1Fhaq4kEMIRmXb5TL5IYxPq6.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'namevn' => "Phở gà",
            'namejp' => "鳥フォー",
            'price' => "680",
            'image' => "images/OEvjhRv4pdYJsQBc9ieoJzrsXvq84EQKLeQvuGRC.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'namevn' => "Tôm xóc tỏi",
            'namejp' => "海老ニンニクソース炒め",
            'price' => "980",
            'image' => "images/qRzh4H8njNKOVQ38weT1lDZfRUqXSmJmCu6L9wEL.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'namevn' => "Bò bóp thấu",
            'namejp' => "牛サラダ",
            'price' => "680",
            'image' => "images/t99MTaHPL7pw50FT8aGechYG3NZniwvzslo6yHQ2.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'namevn' => "Gỏi bò",
            'namejp' => "牛サラダ",
            'price' => "680",
            'image' => "images/t99MTaHPL7pw50FT8aGechYG3NZniwvzslo6yHQ2.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'namevn' => "Cơm chiên",
            'namejp' => "チャーハン",
            'price' => "680",
            'image' => "images/tB0XYiCXOopGtAZsBYmQ1G544yHRRgJGcX56eZRh.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'namevn' => "Xôi trắng",
            'namejp' => "おこわ",
            'price' => "200",
            'image' => "images/WHe2uixyGSKX6zB78VmIPGdnFChaHpFT14Dr3Wpr.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'namevn' => "Phở bò",
            'namejp' => "牛フォー",
            'price' => "680",
            'image' => "images/YJ8VxRf0ij3jwfuGYTlhreeEskPJaqnjXMmPMGTw.jpeg",
            'status' => "1",
        ]);


    }
}
