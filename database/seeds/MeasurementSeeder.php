<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MeasurementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('measurements')->insert([
            [
                'name' => 'height',
                'display_name' => 'Chiều cao',
                'unit' => 'cm',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'name' => 'weight',
                'display_name' => 'Cân nặng',
                'unit' => 'kg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'name' => 'chest',
                'display_name' => 'Vòng ngực',
                'unit' => 'cm',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'name' => 'waist',
                'display_name' => 'Vòng eo',
                'unit' => 'cm',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'name' => 'butt',
                'display_name' => 'Vòng mông',
                'unit' => 'cm',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'name' => 'slush',
                'display_name' => 'Mỡ thừa',
                'unit' => 'Kcal',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
