<?php

namespace App\Http\Controllers;

use App\Events\SendMessage;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function sendMessage(Request $request)
    {
        $message = $request->input('message');
        event(new SendMessage($message));

        return response()->json(['status' => 'Message sent!']);
    }
}
