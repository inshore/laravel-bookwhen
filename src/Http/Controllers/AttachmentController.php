<?php

namespace InShore\Bookwhen\Http\Controllers;

use App\Http\Controllers\Controller;

class AttachmentController extends Controller
{
    public function index()
    {
        $attachments = Bookwhen::attachments();
        
        return view('bookwhen::attachments.index', compact('attachments'));
    }

    public function show(string $attachmentId)
    {
        $attachment = Bookwhen::attachments($attachmentId);
        
        return view('bookwhen::attachments.show', compact('attachment'));
    }
}
