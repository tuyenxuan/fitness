<?php

namespace App\Http\Controllers\Member;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function showDasboard()
    {
        return view('backend.member.home');
    }

    public function showReport()
    {
        return view('backend.member.report');
    }

    public function createReport()
    {
        return view('backend.member.create_report');
    }

    public function showReview()
    {
        return view('backend.member.review');
    }
}