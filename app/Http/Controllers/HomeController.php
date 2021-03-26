<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;
use App\Events\NewMessage;
use App\Events\CheckOnlineStatus;
use Pusher\pusher;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
//        dd(auth()->user());
//        dd(auth()->user()->id);
        $users = User::where('id', '!=', auth()->user()->id)->get();
        // broadcast(new CheckOnlineStatus(auth()->user()->id));
        return view('users.index', compact('users'));
    }


    public function messages(Request $request)
    {
//        $id = $_GET['id'];
//        dd(auth()->user()->id);
//        $messages = Message::where('from_user', '!=', auth()->user()->id)->get();
        $messages = Message::all();

        return view('partials.setmessageline', compact('messages'));
    }

    public function sendMessage(Request $request)
    {

        $message = new Message();
        $message->content = $request->msg;
        $message->from_user = auth()->user()->id;
        if(auth()->user()->id == 3)
        $toSend = 2;
        else
        $toSend = 3;
        $message->to_user = $toSend;
        $message->save();

        event(new NewMessage($message));
        return response()->json(['state' => 1, 'data' => $message]);
     }

}
