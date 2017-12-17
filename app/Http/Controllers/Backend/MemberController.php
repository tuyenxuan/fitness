<?php

namespace App\Http\Controllers\Backend;

use App\Model\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Lesson;
use App\Model\Report;
use App\Model\Review;
use App\Model\Measurement;
use App\Model\MeasurementReport;
use App\Model\WebInfo;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    function __construct()
    {
        $title = WebInfo::where('label', 'title')->first();
        View::share('title', $title);
    }

    public function selectCoach()
    {
        $coach_alls = User::where('level', User::COACH)->get();
        $coachs = [];
        $i = 0;
        foreach ($coach_alls as $coach_all) {
            if ($i > 4) return;
            if (User::where('coach_id', $coach_all->id)->count() == 0) {
                $coachs[$i++] = $coach_all;
            }
        }

        if ($i <= 4) {
            $coach_dbs = DB::table('users')
                ->select('coach_id', DB::raw('count(*) as total'))
                ->where('level', User::MEMBER)
                ->where('coach_id', '<>', NULL)
                ->groupBy('coach_id')
                ->orderBy('total', 'asc')
                ->limit(5 - $i)
                ->get();

            foreach ($coach_dbs as $coach_db) {
                if ($i > 4) return;
                $coachs[$i++] = User::find($coach_db->coach_id);
            }
        }

        return view('backend.member.select_coach', ['coachs' => $coachs]);
    }

    public function createCoachMemberRelation(Request $request)
    {
        if (Auth::user()->level == 3) {
            $member = Auth::user();
            $member->coach_id = $request->coach;
            $member->save();

            return redirect(route('member_home'));
        }
    }

    public function showDasboard()
    {
        $member_id = Auth::user()->id;
        $lesson_3days_agos = Lesson::where('member_id', $member_id)->where('start_date', '<=', date('Y-m-d', time() - 3 * 86400))->where('end_date', '>=', date('Y-m-d', time() - 3 * 86400))->get();
        $lesson_2days_agos = Lesson::where('member_id', $member_id)->where('start_date', '<=', date('Y-m-d', time() - 2 * 86400))->where('end_date', '>=', date('Y-m-d', time() - 2 * 86400))->get();
        $lesson_1days_agos = Lesson::where('member_id', $member_id)->where('start_date', '<=', date('Y-m-d', time() - 1 * 86400))->where('end_date', '>=', date('Y-m-d', time() - 1 * 86400))->get();
        $lesson_todays = Lesson::where('member_id', $member_id)->where('start_date', '<=', date('Y-m-d', time()))->where('end_date', '>=', date('Y-m-d', time()))->get();
        $lesson_next_1days = Lesson::where('member_id', $member_id)->where('start_date', '<=', date('Y-m-d', time() + 1 * 86400))->where('end_date', '>=', date('Y-m-d', time() + 1 * 86400))->get();
        $lesson_next_2days = Lesson::where('member_id', $member_id)->where('start_date', '<=', date('Y-m-d', time() + 2 * 86400))->where('end_date', '>=', date('Y-m-d', time() + 2 * 86400))->get();
        $lesson_next_3days = Lesson::where('member_id', $member_id)->where('start_date', '<=', date('Y-m-d', time() + 3 * 86400))->where('end_date', '>=', date('Y-m-d', time() + 3 * 86400))->get();

        return view('backend.member.home', [
            'lesson_3days_agos' => $lesson_3days_agos ?? [],
            'lesson_2days_agos' => $lesson_2days_agos ?? [],
            'lesson_1days_agos' => $lesson_1days_agos ?? [],
            'lesson_todays' => $lesson_todays ?? [],
            'lesson_next_1days' => $lesson_next_1days ?? [],
            'lesson_next_2days' => $lesson_next_2days ?? [],
            'lesson_next_3days' => $lesson_next_3days ?? []
        ]);
    }

    public function showReport()
    {
        $member_id = Auth::user()->id;
        $reports = Report::where('member_id', $member_id)->orderBy('created_at', 'desc')->paginate(5);

        return view('backend.member.report', ['reports' => $reports]);
    }

    public function showSearchReport(Request $request)
    {
        $member_id = Auth::user()->id;
        $reports = Report::where('member_id', $member_id)->where('title', 'like','%' . $request->search . '%')->orderBy('created_at', 'desc')->paginate(5);

        return view('backend.member.report', ['reports' => $reports, 'search' => $request->search]);
    }

    public function showReportDetail($report_id)
    {
        $report = Report::find($report_id);
        $coach = User::find($report->coach_id);
        $measurement_reports = MeasurementReport::where('report_id', $report->id)->get();

        return view('backend.member.report_detail', ['report' => $report, 'coach' => $coach, 'measurement_reports' => $measurement_reports]);
    }

    public function showCreateReport()
    {
        $coach = User::find(Auth::user()->coach_id);
        $measurements = Measurement::all();
        return view('backend.member.create_report', ['coach' => $coach, 'measurements' => $measurements]);
    }

    public function createReport(Request $request)
    {
        $member_id = Auth::user()->id;
        $report = new Report();
        $report->member_id = $member_id;
        $report->coach_id = $request->coach_id;
        $report->title = $request->title;
        $report->content = $request->content;
        $report->save();
        $measurements = Measurement::all();
        foreach ($measurements as $measurement) {
            $measurement_report = new MeasurementReport();
            $measurement_report->measurement_id = $measurement->id;
            $measurement_report->report_id = $report->id;
            $measurement_report->measure = $request[$measurement->name];
            $measurement_report->save();
        }

        return redirect(route('member_report'));
    }

    public function showReview(Request $request)
    {
        $member_id = Auth::user()->id;
        $reviews = Review::where('member_id', $member_id)->orderBy('created_at', 'desc')->paginate(5);

        return view('backend.member.review', ['reviews' => $reviews]);
    }

    public function showSearchReview(Request $request)
    {
        $member_id = Auth::user()->id;
        $reviews = Review::where('member_id', $member_id)->where('title', 'like','%' . $request->search . '%')->orderBy('created_at', 'desc')->paginate(5);

        return view('backend.member.review', ['reviews' => $reviews, 'search' => $request->search]);
    }

    public function showReviewDetail($review_id)
    {
        $review = Review::find($review_id);

        return view('backend.member.review_detail', ['review' => $review]);
    }
}