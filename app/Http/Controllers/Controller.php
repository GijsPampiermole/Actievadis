<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

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
}