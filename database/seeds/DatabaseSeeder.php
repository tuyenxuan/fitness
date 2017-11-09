<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(CategorySeeder::class);
         $this->call(ExcerciseSeeder::class);
         $this->call(PostSeeder::class);
         $this->call(MusicSeeder::class);
         $this->call(ImageSystemSeeder::class);
         $this->call(WebInfoSeeder::class);
         $this->call(MeasurementSeeder::class);
    }
}
