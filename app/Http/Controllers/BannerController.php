<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::all();
        return view('admin.banner.manage_banner',[
            'banners'=>$banners
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Banner.add_banner');
    }

    public function status($id){
      $banner = Banner::find($id);
      $count = Banner::where('status','=',1)->count();
       if ($banner->status == 1){
           $banner->status =0;
       }
       else{
            if($count == 0){
                $banner->status =1;
            }
            else{
                return back()->with('warning','maximum 1 item can be active!'); 
            }
       }
       $banner->save();
       return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Banner::saveBanner($request);
        return back()->withSuccess('new banner added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('admin.banner.edit_banner',[
            'banner'=>$banner
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Banner::updateBanner($request,$id);
        return redirect()->route('banners.index')->withSuccess('updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Banner::deleteBanner($id);
        return back()->withSuccess('Deleted!');
    }
}
