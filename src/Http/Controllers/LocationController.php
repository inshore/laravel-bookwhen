<?php

namespace InShore\Bookwhen\Http\Controllers;

use App\Http\Controllers\Controller;
use InShore\Bookwhen\Facades\Bookwhen;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Bookwhen::locations();

        return view('bookwhen::locations.index', compact('locations'));
    }

    public function show(string $locationId)
    {
        $location = Bookwhen::location($locationId);

        return view('bookwhen::locations.show', compact('location'));
    }
}
