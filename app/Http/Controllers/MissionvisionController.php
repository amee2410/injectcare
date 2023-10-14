<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\missionvision;
use File;


class MissionvisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('missionvisions')->select('*')->first();
        return view('Backend.Mission_Vision.list',compact('data'));
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
            'mission_title' => 'required',
            'mission_description' => 'required',
            'mission_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'vision_title' => 'required',
            'vision_description' => 'required',
            'vision_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'core_title' => 'required',
            'core_description' => 'required',
            'core_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

            $data = missionvision::find($id);

            $filename1 = "";
            $destinationPath1 = public_path('Backend/images/mission/');
            if ($request->hasFile('mission_image')) {
                $files = $request->file('mission_image');
                //Remove Old Image    
                $usersImage = public_path("Backend/images/mission/$data->mission_image"); // get previous image from folder
                if (File::exists($usersImage)) {
                File::delete($usersImage);
                }
                //Upload Image
                $filename1="mission_vision-".strtotime(date('d-m-Y h:i:s')).".".$files->getClientOriginalExtension();
                $data->mission_image = $filename1;
                $files->move($destinationPath1,$filename1);
            }
            
            $filename2 = "";
            $destinationPath2 = public_path('Backend/images/vision/');
            if ($request->hasFile('vision_image')) {
                $files = $request->file('vision_image');
                //Remove Old Image    
                $usersImage = public_path("Backend/images/vision/$data->vision_image"); // get previous image from folder
                if (File::exists($usersImage)) {
                File::delete($usersImage);
                }
                //Upload Image
                $filename2="mission_vision-".strtotime(date('d-m-Y h:i:s')).".".$files->getClientOriginalExtension();
                $data->vision_image = $filename2;
                $files->move($destinationPath2,$filename2);
            }
            $filename3 = "";
            $destinationPath3 = public_path('Backend/images/core/');
            if ($request->hasFile('core_image')) {
                $files = $request->file('core_image');
                //Remove Old Image    
                $usersImage = public_path("Backend/images/core/$data->core_image"); // get previous image from folder
                if (File::exists($usersImage)) {
                File::delete($usersImage);
                }
                //Upload Image
                $filename3="mission_vision-".strtotime(date('d-m-Y h:i:s')).".".$files->getClientOriginalExtension();
                $data->core_image = $filename3;
                $files->move($destinationPath3,$filename3);
            }
            
            $data->mission_title = $request->mission_title;
            $data->mission_description = $request->mission_description;
            $data->vision_title = $request->vision_title;
            $data->vision_description = $request->vision_description;
            $data->core_title = $request->core_title;
            $data->core_description = $request->core_description;
           
            $data->save();

            return redirect('Mission_Vision')->with('success', 'Record Inserted Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
