<?php


namespace Dickens\Message\app\Http\Controllers;


use App\Http\Controllers\Controller;
use Dickens\Message\App\Mail\MessageSent;
use Dickens\Message\app\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function index()
    {
        return view('dickens::index');
    }
    public function message(Request $request)
    {
       Mail::to(config('message.email_to'))->send(new MessageSent($request->message,$request->email));
        if(Message::create($request->all()))
        {
            return back();
            ?>
            <script type="text/javascript">
                alert('message sent successfully');
            </script>
            <?php
        }else{
            return back();
            ?>
            <script type="text/javascript">
                alert('Failed to send message');
            </script>
            <?php
        }
    }
}
