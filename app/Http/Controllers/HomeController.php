<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private static $users,$user_count;
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
        return view('home');
    }
    public function user(){
        self::$users = User::where('id','!=',auth::id())->get();
        self::$user_count = User::count();
        return view('admin.user.user',[
            'users'=>self::$users,
            'user_count'=>self::$user_count
        ]);
    }
    public function userEdit($id){
        return view('admin.user.edit_user');
    }

    public function userDelete(Request $request){
        $delete = User::find($request->id);
        $delete->delete();
        return back();
    }
    public function profile(){
        return view('admin.user.profile');
    }
    public function profileUpdate(Request $request){
        if ($request->photo == ''){
            User::find(Auth::id())->update([
                'name'=>$request->name,
                'email'=>$request->email
            ]);
            return back()->with('success','profile updated!');
        }
        else{
            $photo = Auth::user()->photo;
            if ($photo == null){
               $uploaded_photo = $request->photo;
               $extension = $uploaded_photo->getClientOriginalExtension();
               $file_name = auth::id().'.'.$extension;
               $img = Image::make($uploaded_photo)->save(public_path('uploads/user/'.$file_name));
               User::find(auth::id())->update([
                   'name'=>$request->name,
                   'email'=>$request->email,
                   'photo'=>$file_name
               ]);
               return back()->with('success','profile updated!');
            }
            else{
                $delete_form = public_path('uploads/user/'.$photo);
                unlink($delete_form);

                $uploaded_photo = $request->photo;
                $extension = $uploaded_photo->getClientOriginalExtension();
                $file_name = auth::id().'.'.$extension;
                $img = Image::make($uploaded_photo)->save(public_path('uploads/user/'.$file_name));

                User::find(auth::id())->update([
                    'name'=>$request->name,
                    'email'=>$request->email,
                   'photo'=>$file_name
                ]);
                return back()->with('success','profile updated!');
            }
        }
    }
    public function passwordUpdate(Request $request){
        $request->validate([
            'old_password'=>'required',
            'password'=>'required|confirmed',
            'password_confirmation'=>'required'
        ]);
        if(Hash::check($request->old_password, auth::user()->password)){
            User::find(auth::id())->update([
               'password'=>bcrypt($request->password)
            ]);
            return back()->with('password','password updated');
        }
        else{
            return back()->with('failed','old password wrong!');
        }
    }



}
