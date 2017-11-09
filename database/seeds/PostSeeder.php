<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'Công thức làm khoai lang + đậu đen kiểu Mexico để ăn tăng cân',
                'description' => 'Công thức làm khoai lang + đậu đen kiểu Mexico để ăn tăng cân',
                'image' => 'user/images/barbell-front-squat-218x150.jpg',
                'content' => 'Công thức làm khoai lang + đậu đen kiểu Mexico để ăn tăng cân',
                'category_id' => 4,
            ],[
                'title' => 'Câu chuyện hét giá 177 triệu tiền tập gym và bài học cho các bạn PT',
                'description' => 'Câu chuyện hét giá 177 triệu tiền tập gym và bài học cho các bạn PT',
                'image' => 'user/images/barbell-front-squat-218x150.jpg',
                'content' => 'Câu chuyện hét giá 177 triệu tiền tập gym và bài học cho các bạn PT',
                'category_id' => 4,
            ],[
                'title' => '4 lý do nên tập toàn thân bên cạnh các ngày tập riêng từng nhóm cơ',
                'description' => '4 lý do nên tập toàn thân bên cạnh các ngày tập riêng từng nhóm cơ',
                'image' => 'user/images/barbell-front-squat-218x150.jpg',
                'content' => '4 lý do nên tập toàn thân bên cạnh các ngày tập riêng từng nhóm cơ',
                'category_id' => 4,
            ],[
                'title' => 'Thủ tướng Canada Trudeau chạy bộ ở kênh Nhiêu Lộc gây bất ngờ cho người dân',
                'description' => 'Thủ tướng Canada Trudeau chạy bộ ở kênh Nhiêu Lộc gây bất ngờ cho người dân',
                'image' => 'user/images/barbell-front-squat-218x150.jpg',
                'content' => 'Thủ tướng Canada Trudeau chạy bộ ở kênh Nhiêu Lộc gây bất ngờ cho người dân',
                'category_id' => 4,
            ]
        ]);
    }
}
