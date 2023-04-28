<?php

namespace InShore\Bookwhen\Http\Controllers;

use App\Http\Controllers\Controller;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Bookwhen::tickets();
        
        return view('bookwhen::tickets.index', compact('tickets'));
    }

    public function show(string $ticketId)
    {
        $ticket = Bookwhen::tickets($ticketId);
        
        return view('bookwhen::tickets.show', compact('ticket'));
    }
}