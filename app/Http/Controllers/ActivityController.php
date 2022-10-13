<?php

namespace App\Http\Controllers;

use App\Models\ActivitiesRelationship;
use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    public function signUp(Request $request)
    {
        $activityRelationship = new ActivitiesRelationship();
        $activityRelationship->userId = Auth::id();
        $activityRelationship->activityId = $request->id;
        $activityRelationship->save();
        return redirect('/')->with('success', 'Je bent succesvol ingeschreven');
    }

    public function unSubscribe(Request $request)
    {
        ActivitiesRelationship::where('activityId', $request->id)->where('userId', Auth::id())->delete();
        return redirect('/')->with('success', 'Je bent nu uitgeschreven');
    }

    public function delete(Request $request)
    {
        Activity::where('id', $request->id)->delete();
        ActivitiesRelationship::where('activityId', $request->id)->delete();
        return redirect('/')->with('success', 'Activiteit succesvol verwijderd');
    }
}
