<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function showUpdateProfile()
    {
        $user = Auth::user();
        return view('backend.account.update_profile', ['user' => $user]);
    }

    public function actionUpdateProfile(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->gender = $request->gender;
        $user->year_of_birth = $request->year_of_birth;
        $user->address = $request->address;
        $user->save();
        return redirect()->back();
    }
}