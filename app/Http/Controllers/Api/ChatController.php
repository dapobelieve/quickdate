<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Chat;
use Auth;

class ChatController extends Controller
{
    public function getUser(Request $request)
    {
        return response()->json($request->user());
    }


    public function storeMessage(Request $request)
    {
        // store message
        
        // fire event
        
        // return message
    }
}
