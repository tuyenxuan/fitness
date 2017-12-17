<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class WebInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('web_infos')->insert([
            [
                'label' => 'about',
                'title' => 'Giới thiệu ',
                'content' => 'Thể Hình Channel là kênh hướng dẫn các bạn Gymer tập luyện thể hình chuyên nghiệp, với các giáo án thể hình kèm và các bài tập được hướng dẫn chi tiết, phù hợp với tất cả đối tượng từ cơ bản đến nâng cao. Chúc các bạn mau chóng có được Body đẹp cùng Thể Hình Channel. ',
                'url' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'label' => 'root_from',
                'title' => 'Nguồn bài viết',
                'content' => 'http://www.thehinh.com/',
                'url' => 'http://www.thehinh.com/',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'label' => 'fanpage',
                'title' => 'Theo dõi trên fanpage',
                'content' => 'http://www.facebook.com/TheHinhcom',
                'url' => 'http://www.facebook.com/TheHinhcom',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'label' => 'contact',
                'title' => 'Liên hệ chúng tôi',
                'content' => 'thehinhcom@gmail.com',
                'url' => 'thehinhcom@gmail.com',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'label' => 'youtube',
                'title' => 'Youtube',
                'content' => 'https://www.youtube.com/channel/UC2s9lXvxZ5oNT-GgVdKitYA',
                'url' => 'https://www.youtube.com/channel/UC2s9lXvxZ5oNT-GgVdKitYA',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'label' => 'title',
                'title' => 'Thẻ hình 24h',
                'content' => 'Thẻ hình 24h',
                'url' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
