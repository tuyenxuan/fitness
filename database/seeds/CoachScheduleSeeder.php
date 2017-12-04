<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CoachScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coach_schedules')->insert([
            [
                'coach_id' => 2,
                'date' => '2017/11/20',
                'start_time' => '09:00',
                'end_time' => '11:00',
                'work' => 'Hướng dẫn tập luyện cho thành viên ...',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'coach_id' => 2,
                'date' => '2017/11/20',
                'start_time' => '15:00',
                'end_time' => '17:00',
                'work' => 'Hướng dẫn tập luyện cho thành viên ...',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'coach_id' => 2,
                'date' => '2017/11/21',
                'start_time' => '09:00',
                'end_time' => '11:00',
                'work' => 'Hướng dẫn tập luyện cho thành viên ...',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'coach_id' => 2,
                'date' => '2017/11/21',
                'start_time' => '15:00',
                'end_time' => '17:00',
                'work' => 'Hướng dẫn tập luyện cho thành viên ...',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'coach_id' => 2,
                'date' => '2017/11/22',
                'start_time' => '09:00',
                'end_time' => '11:00',
                'work' => 'Hướng dẫn tập luyện cho thành viên ...',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'coach_id' => 2,
                'date' => '2017/11/22',
                'start_time' => '15:00',
                'end_time' => '17:00',
                'work' => 'Hướng dẫn tập luyện cho thành viên ...',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'coach_id' => 2,
                'date' => '2017/11/23',
                'start_time' => '09:00',
                'end_time' => '11:00',
                'work' => 'Hướng dẫn tập luyện cho thành viên ...',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'coach_id' => 2,
                'date' => '2017/11/24',
                'start_time' => '15:00',
                'end_time' => '17:00',
                'work' => 'Hướng dẫn tập luyện cho thành viên ...',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ]);
    }
}
