<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    private static $contact;
    public static function updateContact($request){
        self::$contact = Contact::find($request->id);
        self::$contact->mobile = $request->mobile;
        self::$contact->email = $request->email;
        self::$contact->address = $request->address;
        self::$contact->save();

    }
}
