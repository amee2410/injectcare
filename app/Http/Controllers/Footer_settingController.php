<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\footer_setting;
use File;

class Footer_settingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('footer_settings')->select('*')->first();
        return view('Backend.Footer_Setting.list', compact('data'));   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = \Validator::make($request->all(), [
            'facebook_link' => 'required',
            'twitter_link' => 'required',
            'instagram_link' => 'required',
            'youtube_link' => 'required',
            'linkedin_link' => 'required',
            'footer_logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',  
            'desc' => 'required',
        ]);

            $data = footer_setting::find($id);
            $filename = "";
            $destinationPath = public_path('Backend/images/footer_setting/');
            if ($request->hasFile('footer_logo')) {
                $files = $request->file('footer_logo');
                //Remove Old Image    
                $usersImage = public_path("Backend/images/footer_setting/$data->footer_logo"); // get previous image from folder
                if (File::exists($usersImage)) {
                File::delete($usersImage);
                }
                //Upload Image
                $filename="Logo".strtotime(date('d-m-Y h:i:s')).".".$files->getClientOriginalExtension();
                $data->footer_logo = $filename;
                $files->move($destinationPath,$filename);
            }
            $data->facebook_link = $request->facebook_link;
            $data->twitter_link = $request->twitter_link;
            $data->instagram_link = $request->instagram_link;
            $data->youtube_link = $request->youtube_link;
            $data->linkedin_link = $request->linkedin_link;
            $data->desc = $request->desc;
            
            $data->save();

            return redirect('Footer_Setting')->with('success', 'Record Inserted Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
