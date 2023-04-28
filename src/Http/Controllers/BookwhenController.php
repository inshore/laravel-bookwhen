<?php

namespace InShore\Bookwhen\Http\Controllers;

use App\Http\Controllers\Controller;

class BookwhenController extends Controller
{
    public function index()
    {
        return view('bookwhen::index');
    }
}
