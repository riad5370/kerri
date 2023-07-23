<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;
    private static $work,$img,$imgName,$directory,$Url;
    public static function saveWork($request){
        self::$work = new Work();
        self::$work->category_name = $request->category_name;
        self::$work->title = $request->title;
        if ($request->file('image')){
            self::$work->image = self::saveImage($request);
        }
        self::$work->save();
    }

    public static function saveImage($request){
        self::$img = $request->file('image');
        self::$imgName = 'work-'.rand().'.'.self::$img->extension();
        self::$directory = 'uploads/work/';
        self::$Url = self::$directory.self::$imgName;
        self::$img->move(self::$directory,self::$imgName);
        return self::$Url;
    }
    public static function workUpdate($request){
        self::$work = Work::find($request->id);
        self::$work->category_name = $request->category_name;
        self::$work->title = $request->title;
        if ($request->file('image')){
            if (self::$work->image){
                if (file_exists(self::$work->image)){
                    unlink(self::$work->image);
                    self::$work->image = self::saveImage($request);
                }
            }
            else{
                self::$work->image = self::saveImage($request);
            }
        }
        self::$work->save();

    }
    public static function workStatus($id){
        self::$work = Work::find($id);
        if (self::$work->status == 1){
            self::$work->status = 0;
        }
        else{
            self::$work->status = 1;
        }
        self::$work->save();
    }
    public static function deleteWork($id){
        self::$work = Work::find($id);
        if (self::$work->image){
            if(file_exists(self::$work->image)){
                unlink(self::$work->image);
                self::$work->delete();
            }
        }
        else{
            self::$work->delete();
        }
    }
}
