<?php

namespace App\Http\Controllers;

use App\Models\ActivitiesRelationship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    public function signUp(Request $request)
    {
        $activityRelationship = new ActivitiesRelationship();
        $activityRelationship->user_id = Auth::id();
        $activityRelationship->activity_id = $request->id;
        $activityRelationship->save();
        return redirect('/')->with('success', 'Je bent succesvol ingeschreven');
    }

    public function unSubscribe(Request $request)
    {
        $activity = ActivitiesRelationship::where('activity_id', $request->id)->where('user_id', Auth::id())->delete();
        return redirect('/')->with('success', 'Je bent nu uitgeschreven');
    }
}
