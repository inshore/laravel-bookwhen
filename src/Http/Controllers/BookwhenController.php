<?php

namespace InShore\Bookwhen\Http\Controllers;

class BookwhenController extends Controller
{
    public function index()
    {
        return view('bookwhen::index');
    }
}
