<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Icon;
use App\Models\Inbox;
use App\Models\Service;
use App\Models\Work;
use Illuminate\Http\Request;

class FrontendContrller extends Controller
{
    public function index(){
        $banner = Banner::where('status',1)->get();
        $about = About::all();
        $icons = Icon::where('status',1)->get();
        $contact = Contact::all();
        $works = Work::where('status',1)->get();
        $blogs = Blog::where('status',1)->get();
        $services = Service::where('status',1)->get();
        return view('frontend.index',[
            'banner'=>$banner,
            'services'=>$services,
            'works'=>$works,
            'contact'=>$contact,
            'icons'=>$icons,
            'about'=>$about,
            'blogs'=>$blogs
        ]);
    }

}
