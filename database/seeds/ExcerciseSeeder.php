<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ExcerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 6; $i <= 18; $i++) {
            DB::table('excercises')->insert([
                [
                    'title' => 'Top 5 bài tập cho cơ bụng cực an toàn cho cột sống của bạn',
                    'description' => 'Top 5 bài tập cho cơ bụng cực an toàn cho cột sống của bạn',
                    'image' => 'user/images/barbell-front-squat-218x150.jpg',
                    'content' => 'Top 5 bài tập cho cơ bụng cực an toàn cho cột sống của bạn',
                    'video_link' => 'AOfYbPxk0jY',
                    'category_id' => $i,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],[
                    'title' => '4 bài tập tăng sức mạnh cho phần hông gymer nào cũng cần tập',
                    'description' => 'Top 5 bài tập cho cơ bụng cực an toàn cho cột sống của bạn',
                    'image' => 'user/images/45-phut-giam-mo-toan-than-cung-hana-giang-anh-218x150.jpg',
                    'content' => 'Top 5 bài tập cho cơ bụng cực an toàn cho cột sống của bạn',
                    'video_link' => 'mxWissvKVj0',
                    'category_id' => $i,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],[
                    'title' => '19 bài tập bụng nữ tại nhà để bụng trên bụng dưới thẳng tắp',
                    'description' => '19 bài tập bụng nữ tại nhà để bụng trên bụng dưới thẳng tắp',
                    'image' => 'user/images/huong-dan-siet-co-nguc-cho-nam-218x150.jpg',
                    'content' => '19 bài tập bụng nữ tại nhà để bụng trên bụng dưới thẳng tắp',
                    'video_link' => 'je7lKf3m3gw',
                    'category_id' => $i,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],[
                    'title' => '45 phút giảm mỡ toàn thân cùng Hana Giang Anh',
                    'description' => '45 phút giảm mỡ toàn thân cùng Hana Giang Anh',
                    'image' => 'user/images/top-5-bai-tap-the-hinh-218x150.jpg',
                    'content' => '45 phút giảm mỡ toàn thân cùng Hana Giang Anh',
                    'video_link' => 'AOfYbPxk0jY',
                    'category_id' => $i,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],[
                    'title' => '4 bài tập tăng sức mạnh cho phần hông gymer nào cũng cần tập',
                    'description' => 'Top 5 bài tập cho cơ bụng cực an toàn cho cột sống của bạn',
                    'image' => 'user/images/45-phut-giam-mo-toan-than-cung-hana-giang-anh-218x150.jpg',
                    'content' => 'Top 5 bài tập cho cơ bụng cực an toàn cho cột sống của bạn',
                    'video_link' => 'mxWissvKVj0',
                    'category_id' => $i,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
            ]);
        }
    }
}
