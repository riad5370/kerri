<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    private static $service;
    public static function saveService($request){
       self::$service = new Service();
       self::$service->icon = $request->icon;
       self::$service->title = $request->title;
       self::$service->description = $request->description;
       self::$service->save();
    }

    public static function serviceDelete($id){
        self::$service = Service::find($id);
        self::$service->delete();
    }
    public static function serviceStatus($id){
        self::$service = Service::find($id);
        if (self::$service->status == 1){
            self::$service->status = 0;
        }
        else{
            self::$service->status = 1;
        }
        self::$service->save();
    }
}
