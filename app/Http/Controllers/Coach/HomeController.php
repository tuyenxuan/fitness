<?php

namespace App\Http\Controllers\Coach;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function showDasboard()
    {
        return view('backend.coach.home');
    }

    public function showReportList()
    {
        return view('backend.coach.report_list');
    }

    public function showMemberList()
    {
        return view('backend.coach.member_list');
    }

    public function showReviewList()
    {
        return view('backend.coach.review_list');
    }

    public function showExcerciseList()
    {
        return view('backend.coach.excercise_list');
    }
}