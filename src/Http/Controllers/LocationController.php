<?php

namespace InShore\Bookwhen\Http\Controllers;

use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    public function index()
    {
        $elocations = Bookwhen::locations();
        
        return view('bookwhen::locations.index', compact('locations'));
    }

    public function show(string $locationId)
    {
        $location = Bookwhen::events($locationId);
        
        return view('bookwhen::elocations.show', compact('location'));
    }
}