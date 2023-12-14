<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Event;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all();
        $events = Event::orderBy('id', 'DESC')->paginate(3);
        return view('events', [
            'categories' => $categories,
            'events' => $events
        ]);
    }

    public function event($eventId)
    {
        // Obtener Evento
        $event = Event::find($eventId);
        $latestEvents = Event::orderBy('id', 'DESC')->take(3)->get();
        return view('event', [
            'event' => $event,
            'latestEvents' => $latestEvents
        ]);
    }

    public function eventsByCategory($category)
    {
        $categories = Category::all();
        $category = Category::where('slug', '=' ,$category)->first();
        $categoryIdSelected = $category->id;
        $events = Event::where('category_id', '=', $categoryIdSelected)->paginate(3);
        return view('events', [
            'categories' => $categories,
            'events' => $events,
            'categoryIdSelected' => $categoryIdSelected
        ]);
    }

}
