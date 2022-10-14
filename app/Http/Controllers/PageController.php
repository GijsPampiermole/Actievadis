<?php

namespace App\Http\Controllers;

use App\Models\ActivitiesRelationship;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Activity;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PageController extends BaseController
{
    public function loginPage(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('login');
    }

    public function activities(Request $request)
    {
        $activities = Activity::orderBy('startTime', 'ASC')->get();
        $signings = ActivitiesRelationship::where('userId', Auth::id())->get();
        return view('activities', [
            'activities' => $activities,
            'userSignings' => $signings
        ]);
    }

    public function addActivities()
    {
        return view('addActivities');
    }

    public function account()
    {
        return view('account', ['user' => Auth::user()]);
    }

    public function adminAccounts()
    {
        return view('adminAccounts', ['users' => User::all()]);
    }
}
