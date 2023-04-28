<?php

namespace InShore\Bookwhen\Http\Controllers;

use App\Http\Controllers\Controller;
use InShore\Bookwhen\Facades\Bookwhen;


class TicketController extends Controller
{
    public function index($eventId)
    {
        $tickets = Bookwhen::tickets($eventId);
        
        return view('bookwhen::tickets.index', compact('tickets'));
    }

    public function show(string $ticketId)
    {
        $ticket = Bookwhen::ticket($ticketId);
        
        return view('bookwhen::tickets.show', compact('ticket'));
    }
}