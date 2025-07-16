<?php

namespace App\Http\Controllers;

use App\Models\Cant_Miss_Event;
use App\Models\Event;
use App\Models\Event_booking;
use App\Models\Featured_content;
use App\Models\Footers;
use App\Models\Logo;
use App\Models\Mission;
use App\Models\Sponser_book;
use App\Models\Sponsers;
use App\Models\Top_Slider;
use App\Models\Vision;
use App\Models\You_tube;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class FontendController extends Controller
{
    //
    public function index()
    {
        $top_slider = Top_Slider::all();
        $you_tube   = You_tube::first();
        $featured_content = Featured_content::first();
        $Cant_Miss_Event = Cant_Miss_Event::first();
        // $events = Event::where('delete',0)->get();
        $events = Event::all();
        $sponsers = Sponsers::where('delete',0)->get();
        $logos = Logo::all();
        $footers = Footers::first();
        return
        view('index',compact('top_slider','you_tube','featured_content','Cant_Miss_Event','events','sponsers','logos','footers'));
    }
    public function event_details($id)
    {
        $event = Event::findOrFail($id);
        // dd($event);
        return view('event_details',compact('event'));
    }
    public function event_booking(Request $request)
    {
        $validated = $request->validate([
        'event_id' => 'required|exists:events,id',
        'user' => 'required|exists:users,id',
        'name' => 'required|string|max:255',
         'email' => [
         'required',
         'email',
         'max:255',
         Rule::unique('event_bookings')->where(function ($query) use ($request) {
         return $query->where('event_id', $request->event_id);
         }),
         ],
        'phone' => 'required|string|max:20',
        'tickets' => 'required|integer|min:1|max:10',
        ]);

        Event_booking::create([
        'event_id' => $validated['event_id'],
        'user_id' => $validated['user'],
        'name' => $validated['name'],
        'email' => $validated['email'],
        'phone' => $validated['phone'],
        'tickets' => $validated['tickets'],
        ]);

        return back()->with('success', 'Your booking has been submitted successfully!');
    }
    public function sponser_book(Request $request)
    {
    $request->validate([
    'sponser_id' => 'required|exists:sponsers,id',
    'name' => 'required|string|max:255',
    'email' => [
    'required',
    'email',
    // unique per sponsor (custom rule)
    function ($attribute, $value, $fail) use ($request) {
    if (Sponser_book::where('email', $value)
    ->where('sponser_id', $request->sponser_id)
    ->exists()) {
    $fail('You have already booked this sponsor with this email.');
    }
    }
    ],
    'phone' => 'required|string|max:20',
    ]);

    Sponser_book::create([
    'sponser_id' => $request->sponser_id,
    'name' => $request->name,
    'email' => $request->email,
    'phone' => $request->phone,
    'created_by' => $request->created_by,
    ]);

    return back()->with('success', 'Your booking has been submitted!');
    }
    public function mission()
    {
        $mission = Mission::first();
        return view('mission',compact('mission'));
    }
    public function vision()
    {
        $vision = Vision::first();
        return view('vision',compact('vision'));
    }
}
