<?php

namespace App\Http\Controllers;

use App\Models\ActivitiesRelationship;
use Illuminate\Http\Request;
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
        $activities = DB::table('activities')->get();
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
}
