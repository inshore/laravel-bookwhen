<?php

namespace InShore\Bookwhen\Http\Controllers;

use App\Http\Controllers\Controller;

class ClassPassController extends Controller
{
    public function index()
    {
        $classPasses = Bookwhen::classPasses();
        
        return view('bookwhen::class-passes.index', compact('classPasses'));
    }

    public function show(string $classPassId)
    {
        $event = Bookwhen::classPasses($classPassId);
        
        return view('bookwhen::class-passes.show', compact('classPass'));
    }
}