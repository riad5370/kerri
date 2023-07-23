<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    private static $banner,$img,$imgName,$directory,$Url;
    public static function saveBanner($request){
        self::$banner = new Banner();
        self::$banner->title = $request->title;
        self::$banner->header_name = $request->header_name;
        self::$banner->header_desp = $request->header_desp;
        if ($request->file('image')){
            self::$banner->image = self::saveImage($request);
        }
        self::$banner->save();
    }
    public static function saveImage($request){
        self::$img = $request->file('image');
        self::$imgName = 'banner-'.rand().'.'.self::$img->extension();
        self::$directory = 'uploads/banner/';
        self::$Url = self::$directory.self::$imgName;
        self::$img->move(self::$directory,self::$imgName);
        return self::$Url;
    }
    public static function updateBanner($request,$id){
        self::$banner = Banner::find($id);
        self::$banner->title = $request->title;
        self::$banner->header_name = $request->header_name;
        self::$banner->header_desp = $request->header_desp;
        if ($request->file('image')){
            if (self::$banner->image){
                if (file_exists(self::$banner->image)){
                    unlink(self::$banner->image);
                    self::$banner->image = self::saveImage($request);
                }
            }
            else{
                self::$banner->image = self::saveImage($request);
            }
        }
        self::$banner->save();
    }
    public static function deleteBanner($id){
        self::$banner = Banner::find($id);
        if (self::$banner->image){
            if (file_exists(self::$banner->image)){
                unlink(self::$banner->image);
                self::$banner->delete();
            }
        }
        else{
            self::$banner->delete();
        }

    }
}
