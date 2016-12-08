<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\MessageRequest;
use App\Message;

class MessageController extends Controller
{
    public function postMessage(MessageRequest $request){
    	$message = new Message();

    	$message->fullname = $request->input('fullname');
    	$message->phone_number = $request->input('phone_number');
    	$message->email = $request->input('email');
        $message->message = $request->input('message');

    	$saved = $message->save();

        if ($saved){
            return redirect()->route('contact');
        }
    }
}
