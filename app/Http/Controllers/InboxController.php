<?php

namespace App\Http\Controllers;

use App\Models\Inbox;
use Illuminate\Http\Request;

class InboxController extends Controller
{
    public function storeMessage(Request $request){
        Inbox::saveInbox($request);
        return redirect('/#inbox')->with('success','Message Sent!');
    }
    public function manageMessage(){
        $inboxs = Inbox::orderBy('created_at', 'desc')->get();
        return view('admin.Inbox.manage_message',[
            'inboxs'=>$inboxs
        ]);
    }
    public function viewMessage($id){
        $message = Inbox::find($id);
        $message->status=1;
        $message->save();
        return view('admin.Inbox.view_message',[
            'message'=>$message
        ]);
    }
    public function deleteMessage(Request $request){
        Inbox::deleteMessage($request);
        return back()->with('delete','delete successfully!');
    }
}
