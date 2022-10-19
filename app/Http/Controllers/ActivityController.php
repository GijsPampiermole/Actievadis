<?php

namespace App\Http\Controllers;

use App\Models\ActivitiesRelationship;
use App\Models\Activity;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
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

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function addActivity(Request $request){
        $name = $request->input('name');
        $location = $request->input('location');
        $food = $request->input('food') == 'yes' ? 1 : 0;
        $image = $request->input('image');
        $price = $request->input('price');
        $startTime = $request->input('startTime');
        $endTime = $request->input('endTime');
        $description = $request->input('description');
        $needs = $request->input('needs');
        $maxParticipants = $request->input('maxParticipants');
        $minParticipants = $request->input('minParticipants');
        $date = $request->input('startTime');

        $signedUpUsers = "[{user: 1}{user: 2}]";

        $data = array('name'=>$name, 'location'=>$location, 'food'=>$food, 'image'=>$image, 'price'=>$price, 'startTime'=>$startTime, 'endTime'=>$endTime, 'description'=>$description, 'needs'=>$needs, 'maxParticipants'=>$maxParticipants, 'minParticipants'=>$minParticipants, 'signedUpUsers'=>$signedUpUsers);

        DB::table('activities')->insert($data);
        return redirect('/activities');
    }




    public function delete(Request $request)
    {
        Activity::where('id', $request->id)->delete();
        ActivitiesRelationship::where('activity_id', $request->id)->delete();
        return redirect('/')->with('success', 'Activiteit succesvol verwijderd');
    }
}
