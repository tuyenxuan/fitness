<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function showDasboard()
    {
        return view('backend.admin.home');
    }

    public function showCoachList()
    {
        return view('backend.admin.coach_list');
    }

    public function showExcerciseList()
    {
        return view('backend.admin.excercise_list');
    }

    public function showPostList()
    {
        return view('backend.admin.post_list');
    }

    public function showMusicList()
    {
        return view('backend.admin.music_list');
    }

    public function showImageList()
    {
        return view('backend.admin.image_list');
    }

    public function showSystemInfoList()
    {
        return view('backend.admin.system_info_list');
    }
}