<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ImageSystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('image_systems')->insert([
            [
                'label' => 'logo',
                'url' => 'user/images/logo.png',
                'alt' => 'Logo',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                'label' => 'slide',
                'url' => 'user/images/giao-an-tap-gym-4-tuan-1.jpg',
                'alt' => 'Slide',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'label' => 'slide',
                'url' => 'user/images/venum-mass-banner.jpg',
                'alt' => 'Slide',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
