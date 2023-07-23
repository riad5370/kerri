<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inbox extends Model
{
    use HasFactory;
    private static $inbox;
    public static function saveInbox($request){
        self::$inbox = new Inbox();
        self::$inbox->name = $request->name;
        self::$inbox->email = $request->email;
        self::$inbox->subject = $request->subject;
        self::$inbox->message = $request->message;
        self::$inbox->save();
    }
    public static function deleteMessage($request){
        self::$inbox = Inbox::find($request->id);
        self::$inbox->delete();
    }
}
