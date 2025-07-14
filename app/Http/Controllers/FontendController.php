<?php

namespace App\Http\Controllers;

use App\Models\Cant_Miss_Event;
use App\Models\Event;
use App\Models\Featured_content;
use App\Models\Top_Slider;
use App\Models\You_tube;
use Illuminate\Http\Request;

class FontendController extends Controller
{
    //
    public function index()
    {
        $top_slider = Top_Slider::all();
        $you_tube   = You_tube::first();
        $featured_content = Featured_content::first();
        $Cant_Miss_Event = Cant_Miss_Event::first();
        $events = Event::all();
        return view('app',compact('top_slider','you_tube','featured_content','Cant_Miss_Event','events'));
    }
}
