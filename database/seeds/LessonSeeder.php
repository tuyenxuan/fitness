<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lessons')->insert([
            [
                'title' => 'Bài học 1',
                'date' => Carbon::now()->format('Y/m/d'),
                'member_id' => 8,
                'excercise_id' => 1,
                'start_time' => '09:00',
                'end_time' => '10:00',
                'description' => 'Tập luyện đều đặn, không tập quá sức',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'title' => 'Bài học 2',
                'date' => Carbon::now()->format('Y/m/d'),
                'member_id' => 8,
                'excercise_id' => 2,
                'start_time' => '10:00',
                'end_time' => '11:00',
                'description' => 'Tập luyện đều đặn, không tập quá sức',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'title' => 'Bài học 3',
                'date' => Carbon::now()->format('Y/m/d'),
                'member_id' => 8,
                'excercise_id' => 2,
                'start_time' => '15:00',
                'end_time' => '17:00',
                'description' => 'Tập luyện đều đặn, không tập quá sức',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'title' => 'Bài học 3',
                'date' => Carbon::now()->format('Y/m/d'),
                'member_id' => 8,
                'excercise_id' => 2,
                'start_time' => '15:00',
                'end_time' => '17:00',
                'description' => 'Tập luyện đều đặn, không tập quá sức',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'title' => 'Bài học 3',
                'date' => Carbon::now()->format('Y/m/d'),
                'member_id' => 8,
                'excercise_id' => 2,
                'start_time' => '17:00',
                'end_time' => '18:00',
                'description' => 'Tập luyện đều đặn, không tập quá sức',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'title' => 'Bài học 3',
                'date' => Carbon::now()->format('Y/m/d'),
                'member_id' => 8,
                'excercise_id' => 2,
                'start_time' => '15:00',
                'end_time' => '17:00',
                'description' => 'Tập luyện đều đặn, không tập quá sức',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'title' => 'Bài học 3',
                'date' => Carbon::now()->format('Y/m/d'),
                'member_id' => 8,
                'excercise_id' => 2,
                'start_time' => '15:00',
                'end_time' => '17:00',
                'description' => 'Tập luyện đều đặn, không tập quá sức',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ]);
    }
}
