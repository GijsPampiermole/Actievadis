<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PageController extends BaseController
{
    public function loginPage(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('login');
    }

    public function activities(Request $request) {
        $activities = Activity::orderBy('startTime', 'ASC')->get();
        return view('activities', ['activities' => $activities]);
    }

    public function addActivities(){
        return view('addActivities');
    }
}
