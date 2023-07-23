<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Icon;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $about = About::all();
        return view('admin.about.about',[
            'about'=>$about
        ]);
    }

    public function socialIcon(){
        $icons = Icon::all();
        return view('admin.about.social_icon',[
            'icons'=>$icons
        ]);
    }
    public function storeIcon(Request $request){
            Icon::insert([
                'icon'=>$request->icon,
                'link'=>$request->link
            ]);
        return back()->with('added','Added Successfully!');
    }
    public function deleteIcon(Request $request){
        Icon::find($request->id)->delete();
        return back()->with('delete','Delete Successfully!');
    }
    public function statusIcon($id){
        $icon = Icon::find($id);
        if ($icon->status == 1){
            $icon->status = 0;
        }
        else{
            $icon->status = 1;
        }
        $icon->save();

        return back();
    }
    public function updateAbout(Request $request){
        if($request->photo == ''){
            About::find($request->id)->update([
                'title'=>$request->title,
                'sub_title'=>$request->sub_title,
                'description'=>$request->description
            ]);
            return back()->with('success','upade successfully!');
        }
        else{
            $delete_img = About::where('id',$request->id)->first()->photo;
            $delete_form = public_path('uploads/about/'.$delete_img);
            unlink($delete_form);

            $uploaded_file = $request->photo;
            $file_name = 'about-'.rand(100,999).'.'.$uploaded_file->extension();
            $img = Image::make($uploaded_file)->save(public_path('uploads/about/'.$file_name));

            About::find($request->id)->update([
                'title'=>$request->title,
                'sub_title'=>$request->sub_title,
                'description'=>$request->description,
                'photo'=>$file_name
            ]);
            return back()->with('success','upade successfully!');
        }
    }

}
