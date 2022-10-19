<?php

namespace App\Http\Controllers;

use App\Models\ActivitiesRelationship;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Activity;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class PageController extends BaseController
{
    public function loginPage(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('login');
    }

    public function activities(Request $request)
    {
        $activities = Activity::orderBy('startTime', 'ASC')->get();
        return view('activities', [
            'activities' => $activities
        ]);
    }

    public function addActivities()
    {
        return view('addActivities');
    }

    public function signUpsPage()
    {
        $activities = User::find(Auth::id())->activities()->get();
        return view('mySignUps', ['activities' => $activities]);
    }

    public function account()
    {
        return view('account', ['user' => Auth::user()]);
    }

    public function adminAccounts()
    {
        return view('adminAccounts', ['users' => User::all()]);
    }

    public function editActivities(Request $request, $activityId)
    {
        $id = strval($activityId);
        $activity = DB::table('activities')->where('id', $id)->first();
        return view('editActivities', [
            'activity' => $activity
        ]);
    }
}
