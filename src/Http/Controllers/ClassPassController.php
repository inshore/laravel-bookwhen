<?php

namespace InShore\Bookwhen\Http\Controllers;

use App\Http\Controllers\Controller;
use InShore\Bookwhen\Facades\Bookwhen;


class ClassPassController extends Controller
{
    public function index()
    {
        $classPasses = Bookwhen::classPasses();
        
        return view('bookwhen::class-passes.index', compact('classPasses'));
    }

    public function show(string $classPassId)
    {
        $classPass = Bookwhen::classPass($classPassId);
        
        return view('bookwhen::class-passes.show', compact('classPasses'));
    }
}