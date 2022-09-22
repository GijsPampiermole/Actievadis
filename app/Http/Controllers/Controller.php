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
    
    public function Chartjs(){
        $Events = array
                  (
                    "0" => array
                              (
                               "title" => "Dierentuin uitje",
                               "start" => "2022-9-2 8:30:00",
                               "end" => "2022-9-2 12:45:00",
                               )
                  );
        return view('fullcalendar',['Events' => $Events]);
    }

    public function addActivity(Request $request){
        $name = $request->input('name');
        $location = $request->input('location');
        $food = $request->input('food');
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
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/fullcalendar">Click Here</a> to go back.';
    }
}