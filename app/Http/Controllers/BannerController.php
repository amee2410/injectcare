<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\banner;
use File;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('banners')->select('*')->get();
        return view('Backend.Banner.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.Banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'banner_title' => 'required',
            'sub_title' => 'required',
            'banner_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title1' => 'required',
            'title2' => 'required',
            'title3' => 'required',
            'read_more_link' => 'required',
            'contact_us_link' => 'required',
        ]);

            $data = new banner();

            $filename = "";
            $destinationPath = public_path('Backend/images/banners/');
            $status = true;
            if ($request->hasFile('banner_image')) {
                $files = $request->file('banner_image');
                $filename="Banner-".strtotime(date('d-m-Y h:i:s')).".".$files->getClientOriginalExtension();
                $data->banner_image = $filename;
                $files->move($destinationPath,$filename);             
            }            
                $data->banner_title = $request->banner_title;
                $data->sub_title = $request->sub_title;
                $data->title1 = $request->title1;
                $data->title2 = $request->title2;
                $data->title3 = $request->title3;
                $data->read_more_link = $request->read_more_link;
                $data->contact_us_link = $request->contact_us_link;
                $data->save();

                return redirect('Banner')->with('success', 'Record Inserted Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = banner::find($id);
        return view('Backend.Banner.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = \Validator::make($request->all(), [
            'banner_title' => 'required',
            'sub_title' => 'required',
            'banner_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title1' => 'required',
            'title2' => 'required',
            'title3' => 'required',
            'read_more_link' => 'required',
            'contact_us_link' => 'required',
        ]);

            $data = banner::find($id);
            $filename = "";
            $destinationPath = public_path('Backend/images/banners/');
            if ($request->hasFile('banner_image')) {
                $files = $request->file('banner_image');
                //Remove Old Image    
                $usersImage = public_path("Backend/images/banners/$data->banner_image"); // get previous image from folder
                if (File::exists($usersImage)) {
                File::delete($usersImage);
                }
                //Upload Image
                $filename="Banner-".strtotime(date('d-m-Y h:i:s')).".".$files->getClientOriginalExtension();
                $data->banner_image = $filename;
                $files->move($destinationPath,$filename);
            }

                $data->banner_title = $request->banner_title;
                $data->sub_title = $request->sub_title;
                $data->title1 = $request->title1;
                $data->title2 = $request->title2;
                $data->title3 = $request->title3;
                $data->read_more_link = $request->read_more_link;
                $data->contact_us_link = $request->contact_us_link;
                $data->save();
                
                $data->save();

                return redirect('Banner')->with('success', 'Record Inserted Successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = banner::find($id)->delete();
        return redirect('Banner');
    }
}
