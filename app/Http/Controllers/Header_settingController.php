<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\header_setting;
use File;

class Header_settingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('header_settings')->select('*')->first();
        return view('Backend.Header_Setting.list',compact('data'));
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
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'favicon' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

            $data = header_setting::find($id);
            $filename = "";
            $destinationPath = public_path('Backend/images/header_setting/');
            if ($request->hasFile('logo')) {
                $files = $request->file('logo');
                //Remove Old Image    
                $usersImage = public_path("Backend/images/header_setting/$data->logo"); // get previous image from folder
                if (File::exists($usersImage)) {
                File::delete($usersImage);
                }
                //Upload Image
                $filename="Logo".strtotime(date('d-m-Y h:i:s')).".".$files->getClientOriginalExtension();
                $data->logo = $filename;
                $files->move($destinationPath,$filename);
            }
            
            if ($request->hasFile('favicon')) {
                $files = $request->file('favicon');
                //Remove Old Image    
                $usersImage = public_path("Backend/images/header_setting/$data->favicon"); // get previous image from folder
                if (File::exists($usersImage)) {
                File::delete($usersImage);
                }
                //Upload Image
                $filename="Favicon".strtotime(date('d-m-Y h:i:s')).".".$files->getClientOriginalExtension();
                $data->favicon = $filename;
                $files->move($destinationPath,$filename);
            }
            
            $data->save();

            return redirect('Header_Setting')->with('success', 'Record Inserted Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
