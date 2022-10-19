<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Controller extends BaseController
{
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

        $data = array('name'=>$name, 'location'=>$location, 'food'=>$food, 'image'=>$image, 'price'=>$price, 'startTime'=>$startTime, 'endTime'=>$endTime, 'description'=>$description, 'needs'=>$needs, 'maxParticipants'=>$maxParticipants, 'minParticipants'=>$minParticipants);
        
        DB::table('activities')->insert($data);
        return redirect('/activities');
    }

    public function editActivity(Request $request, $activityId){
        
        $activity = DB::table('activities')->where('id', $activityId)->first();

        $activity->name = $request->input('name');
        $activity->location = $request->input('location');
        $activity->food = $request->input('food') == 'yes' ? 1 : 0;
        $activity->image = $request->input('image');
        $activity->price = $request->input('price');
        $activity->startTime = $request->input('startTime');
        $activity->endTime = $request->input('endTime');
        $activity->description = $request->input('description');
        $activity->needs = $request->input('needs');
        $activity->maxParticipants = $request->input('maxParticipants');
        $activity->minParticipants = $request->input('minParticipants');
        
        DB::table('activities')->where('id', $activityId)->update((array)$activity);

        return redirect('/');
    }
}