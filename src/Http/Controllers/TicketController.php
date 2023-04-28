<?php

namespace InShore\Bookwhen\Http\Controllers;

use App\Http\Controllers\Controller;
use InShore\Bookwhen\Facades\Bookwhen;


class TicketController extends Controller
{
    public function index()
    {
        $tickets = Bookwhen::tickets();
        var_export($tickets);
        die();
        
        return view('bookwhen::tickets.index', compact('tickets'));
    }

    public function show(string $eventId)
    {
        $ticket = Bookwhen::ticket($eventId);
        
        return view('bookwhen::tickets.show', compact('ticket'));
    }
}