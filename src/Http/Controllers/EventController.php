<?php

namespace InShore\Bookwhen\Http\Controllers;

use App\Http\Controllers\Controller;
use InShore\Bookwhen\Facades\Bookwhen;

class EventController extends Controller
{
    public function index()
    {
        $events = Bookwhen::events();

        return view('bookwhen::events.index', compact('events'));
    }

    public function show(string $eventId)
    {
        $event = Bookwhen::event($eventId);

        return view('bookwhen::events.show', compact('event'));
    }
}
