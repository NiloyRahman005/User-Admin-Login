<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cant_Miss_Event;
use App\Models\Event;
use App\Models\Featured_content;
use Illuminate\Http\Request;
use App\Models\Top_slider;
use App\Models\You_tube;
use Illuminate\Support\Facades\File;

class Backend_controller extends Controller
{
  //
  public function admin_top_slider()
  {
    $top_slider = Top_slider::all();
    return view('admin.top_slider', compact('top_slider'));
  }
  public function admin_top_slider_insert(Request $request)
  {
    // Validate the form
    $request->validate([
      'title' => 'required|string|max:255',
      'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    // Define the folder path
    $folderPath = public_path('top_slider');

    // Create folder if not exists
    if (!File::exists($folderPath)) {
      File::makeDirectory($folderPath, 0755, true);
    }

    // Handle the uploaded image
    if ($request->hasFile('image')) {
      $image = $request->file('image');
      $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
      $image->move($folderPath, $imageName);
      $imagePath = 'top_slider/' . $imageName;
    }

    // Save to database
    Top_slider::create([
      'title' => $request->title,
      'top_slider' => $imagePath,
    ]);

    return redirect()->back()->with('success', 'Top Slider added successfully!');
  }
  public function admin_top_slider_delete($id)
  {
    // Find the slider by ID
    $slider = Top_slider::findOrFail($id);

    // Delete the image file if it exists
    $imagePath = public_path($slider->top_slider);
    if (File::exists($imagePath)) {
      File::delete($imagePath);
    }

    // Delete the slider record from the database
    $slider->delete();

    return redirect()->back()->with('success', 'Top Slider deleted successfully!');
  }
  public function featured()
  {
    $you_tube = You_tube::first();
    $content = Featured_content::first();
    return view('admin.featured', compact('you_tube','content'));
  }
  public function featured_youtube(Request $request)
  {
    // Validate the request
    $request->validate([
      'link' => ['required', 'url', 'regex:/^(https?\:\/\/)?(www\.youtube\.com|youtu\.?be)\/.+$/'],
    ]);

    // Check if a record exists
    $youtube = You_tube::first();

    if ($youtube) {
      // Update existing record
      $youtube->update([
        'link' => $request->link,
      ]);
    } else {
      // Create new record
      You_tube::create([
        'link' => $request->link,
      ]);
    }

    return back()->with('success', 'Featured YouTube link saved successfully.');
  }
  public function you_tube_dlt($id)
  {
    You_tube::find($id)->delete();
    return back()->with('success', "Successfully Deleted");
  }
  public function featured_content_add(Request $request)
  {

    // Validate the input
    $request->validate([
      'content' => 'required|string|max:5000',
    ]);

    // Check if a record already exists
    $existing = Featured_content::first();

    if ($existing) {
      // Update the existing content
      $existing->update([
        'content' => $request->content,
      ]);
    } else {
      // Insert new content
      Featured_content::create([
        'content' => $request->content,
      ]);
    }

    return back()->with('success', 'Featured content saved successfully.');
  }
  public function cant_miss_event()
  {
    $event = Cant_Miss_Event::first();
    return view('admin.cant_miss_event',compact('event'));
  }
public function cant_miss_image(Request $request)
{
$request->validate([
'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
'content' => 'required|string',
]);

$event = Cant_Miss_Event::first();

if (!$event) {
$event = new Cant_Miss_Event();
}

if ($request->hasFile('image')) {
if ($event->image && File::exists(public_path($event->image))) {
File::delete(public_path($event->image));
}

$file = $request->file('image');
$filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
$relativePath = 'cant_miss_event/' . $filename;

$file->move(public_path('cant_miss_event'), $filename);

// Save full relative path
$event->image = $relativePath;
}

$event->content = $request->content;
$event->save();

return back()->with('success', 'Content saved successfully!');
}
public function event()
{
  $event = Event::all();
  return view('admin.event',compact('event'));
}
public function event_insert(Request $request)
{
      $request->validate([
      'title' => 'required|string|max:255',
      'date' => 'required|date',
      'time' => 'required',
      'location' => 'required|string|max:255',
      'description' => 'required|string',
      'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
      ]);

      $imagePath = null;

      if ($request->hasFile('image')) {
      $image = $request->file('image');
      $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

      // Define folder path
      $folderPath = public_path('event_images');

      // Check if folder exists, if not create it with 0755 permission
      if (!File::exists($folderPath)) {
      File::makeDirectory($folderPath, 0755, true);
      }

      // Move file
      $image->move($folderPath, $filename);
      $imagePath = 'event_images/' . $filename;
      }

      Event::create([
      'title' => $request->title,
      'date' => $request->date,
      'time' => $request->time,
      'location' => $request->location,
      'description' => $request->description,
      'image' => $imagePath,
      ]);

      return back()->with('success', 'Event created successfully!');
}
public function event_delete($id)
{
$event = Event::findOrFail($id);

// Delete image file if exists
if ($event->image && File::exists(public_path($event->image))) {
File::delete(public_path($event->image));
}

// Delete event record
$event->delete();

return redirect()->back()->with('success', 'Event deleted successfully!');
}
public function event_details($id)
{
 $event =  Event::findOrFail($id);
  return view('admin.event_details',compact('event'));
}
public function event_update(Request $request, $id)
{
$request->validate([
'title' => 'required|string|max:255',
'date' => 'required|date',
'time' => 'required',
'location' => 'required|string|max:255',
'description' => 'required|string',
'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
]);

$event = Event::findOrFail($id);

// Handle image replacement if new one is uploaded
if ($request->hasFile('image')) {
// Delete old image
if ($event->image && File::exists(public_path($event->image))) {
File::delete(public_path($event->image));
}

// Save new image
$file = $request->file('image');
$filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();

// Ensure folder exists
$folderPath = public_path('event_images');
if (!File::exists($folderPath)) {
File::makeDirectory($folderPath, 0755, true);
}

$file->move($folderPath, $filename);
$event->image = 'event_images/' . $filename;
}

// Update other fields
$event->title = $request->title;
$event->date = $request->date;
$event->time = $request->time;
$event->location = $request->location;
$event->description = $request->description;

$event->save();

return redirect()->back()->with('success', 'Event updated successfully!');
}

}
