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
        var_export($classPasses);
        die();
    }

    public function show(string $classPassId)
    {
        $classPass = Bookwhen::classPass($classPassId);
        var_export($classPass);
        die();
        
        return view('bookwhen::class-passes.show', compact('classPass'));
    }
}