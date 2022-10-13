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
        $date = $request->input('startTime');
        
        $signedUpUsers = "[{user: 1}{user: 2}]";

        $data = array('name'=>$name, 'location'=>$location, 'food'=>$food, 'image'=>$image, 'price'=>$price, 'startTime'=>$startTime, 'endTime'=>$endTime, 'description'=>$description, 'needs'=>$needs, 'maxParticipants'=>$maxParticipants, 'minParticipants'=>$minParticipants, 'signedUpUsers'=>$signedUpUsers);
        
        DB::table('activities')->insert($data);
        return redirect('/activities');
    }
}