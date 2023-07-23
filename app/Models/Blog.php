<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    private static $blog,$img,$imgName,$directory,$Url;
    public static function saveBlog($request){
        self::$blog = new Blog();
        self::$blog->author_name = $request->author_name;
        self::$blog->title = $request->title;
        self::$blog->date = $request->date;
        self::$blog->description = $request->description;
        if ($request->file('image')){
            self::$blog->image = self::saveImage($request);
        }
        self::$blog->save();
    }
    public static function saveImage($request){
        self::$img = $request->file('image');
        self::$imgName = 'blog-'.rand().'.'.self::$img->extension();
        self::$directory = 'uploads/blog/';
        self::$Url = self::$directory.self::$imgName;
        self::$img->move(self::$directory,self::$imgName);
        return self::$Url;
    }
    public static function updateBlog($request){
        self::$blog = Blog::find($request->id);
        self::$blog->author_name = $request->author_name;
        self::$blog->title = $request->title;
        self::$blog->date = $request->date;
        self::$blog->description = $request->description;
        if ($request->file('image')){
            if (self::$blog->image){
                if (file_exists(self::$blog->image)){
                    unlink(self::$blog->image);
                    self::$blog->image = self::saveImage($request);
                }
            }
            else{
                self::$blog->image = self::saveImage($request);
            }
        }
        self::$blog->save();
    }
    public static function updateStatus($id){
        self::$blog = Blog::find($id);
        if (self::$blog->status == 1){
            self::$blog->status = 0;
        }
        else{
            self::$blog->status = 1;
        }
        self::$blog->save();
    }
}
