<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MusicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('musics')->insert([
            [
                'title' => 'Best Of Popular Club Dance House Music Remixes Mashups Mix 2017',
                'description' => 'Best Of Popular Club Dance House Music Remixes Mashups Mix 2017',
                'image' => 'user/images/top-20-edm-nhac-tap-gym-1-100x70.jpg',
                'video_link' => 'https://www.youtube.com/watch?v=VqvGLsmXpQA',
                'category_id' => 5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],[
                'title' => 'SUMMER MIX 2017 | Club Dance Music Mashups Remixes Mix - Dance MEGAMIX - CLUB MUSIC',
                'description' => 'SUMMER MIX 2017 | Club Dance Music Mashups Remixes Mix - Dance MEGAMIX - CLUB MUSIC',
                'image' => 'user/images/top-20-edm-nhac-tap-gym-1-100x70.jpg',
                'video_link' => 'https://www.youtube.com/watch?time_continue=1&v=picAALZlDqs',
                'category_id' => 5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],[
                'title' => 'Best Of Popular Club Dance House Music Remixes Mashups Mix 2017',
                'description' => 'Best Of Popular Club Dance House Music Remixes Mashups Mix 2017',
                'image' => 'user/images/top-20-edm-nhac-tap-gym-1-100x70.jpg',
                'video_link' => 'https://www.youtube.com/watch?v=VqvGLsmXpQA',
                'category_id' => 5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],[
                'title' => 'SUMMER MIX 2017 | Club Dance Music Mashups Remixes Mix - Dance MEGAMIX - CLUB MUSIC',
                'description' => 'SUMMER MIX 2017 | Club Dance Music Mashups Remixes Mix - Dance MEGAMIX - CLUB MUSIC',
                'image' => 'user/images/top-20-edm-nhac-tap-gym-1-100x70.jpg',
                'video_link' => 'https://www.youtube.com/watch?time_continue=1&v=picAALZlDqs',
                'category_id' => 5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],[
                'title' => 'Best Of Popular Club Dance House Music Remixes Mashups Mix 2017',
                'description' => 'Best Of Popular Club Dance House Music Remixes Mashups Mix 2017',
                'image' => 'user/images/top-20-edm-nhac-tap-gym-1-100x70.jpg',
                'video_link' => 'https://www.youtube.com/watch?v=VqvGLsmXpQA',
                'category_id' => 5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],[
                'title' => 'SUMMER MIX 2017 | Club Dance Music Mashups Remixes Mix - Dance MEGAMIX - CLUB MUSIC',
                'description' => 'SUMMER MIX 2017 | Club Dance Music Mashups Remixes Mix - Dance MEGAMIX - CLUB MUSIC',
                'image' => 'user/images/top-20-edm-nhac-tap-gym-1-100x70.jpg',
                'video_link' => 'https://www.youtube.com/watch?time_continue=1&v=picAALZlDqs',
                'category_id' => 5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],[
                'title' => 'SUMMER MIX 2017 | Club Dance Music Mashups Remixes Mix - Dance MEGAMIX - CLUB MUSIC',
                'description' => 'SUMMER MIX 2017 | Club Dance Music Mashups Remixes Mix - Dance MEGAMIX - CLUB MUSIC',
                'image' => 'user/images/top-20-edm-nhac-tap-gym-1-100x70.jpg',
                'video_link' => 'https://www.youtube.com/watch?time_continue=1&v=picAALZlDqs',
                'category_id' => 5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ]);
    }
}
