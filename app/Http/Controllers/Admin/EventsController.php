<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Category;
use Illuminate\Support\Str;


class EventsController extends Controller
{
    //La funcion sirve para que solo el administrador 
    //pueda editar el CRUD
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $events = Event::all();
        $categories = Category::all();
        return view('admin.events.index', [
            'events' => $events,
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
       $newEvent = new Event();

       if( $request->hasFile('featured') ) {
        $file = $request->file('featured');
        $destinationPath = 'images/featureds/';
        $filename = time() . '-' . $file->getClientOriginalName();
        $uploadSuccess = $request->file('featured')->move($destinationPath, $filename);
        $newEvent->featured = $destinationPath . $filename;
    }
       
       $newEvent->category_id = $request->category_id;
       $newEvent->title = $request->title;
       $newEvent->content = $request->content;
       $newEvent->author = $request->author;
       $newEvent->date = $request->date;

       $newEvent->save();
       
       return redirect()->back();
    }

    public function update(Request $request, $eventId)
    {
       $event = Event::find($eventId);

       $event->title = $request->title;
       $event->category_id = $request->category_id;
       $event->content = $request->content;
       $event->author = $request->author;
       $event->date = $request->date;
       //$event->slug = Str::slug($request->title, '-');

       if( $request->hasFile('featured') ) {
        $file = $request->file('featured');
        $destinationPath = 'images/featureds/';
        $filename = time() . '-' . $file->getClientOriginalName();
        $uploadSuccess = $request->file('featured')->move($destinationPath, $filename);
        $event->featured = $destinationPath . $filename;
    }

       $event->save();
       
       return redirect()->back();
    }

    public function delete(Request $request, $eventId)
    {
       $event =  Event::find($eventId);
       $event->delete();
       
       return redirect()->back();
    }
}
