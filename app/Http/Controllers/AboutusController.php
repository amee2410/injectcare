<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\about;
use File;

class AboutusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('abouts')->select('*')->first();
        return view('Backend.About.list', compact('data'));
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
            'about_title' => 'required',
            'sub_title' => 'required',
            'description' => 'required',
            'btn_link' => 'required',
            'point1' => 'required',
            'point2' => 'required',
            'point3' => 'required',
            'point4' => 'required',
            'about_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $data = about::find($id);
        $filename1 = "";
        $destinationPath1 = public_path('Backend/images/about/');
        if ($request->hasFile('about_image')) {
            $files = $request->file('about_image');
            //Remove Old Image    
            $usersImage = public_path("Backend/images/about/$data->about_image"); // get previous image from folder
            if (File::exists($usersImage)) {
                File::delete($usersImage);
            }
            //Upload Image
            $filename1 = "About-" . strtotime(date('d-m-Y h:i:s')) . "." . $files->getClientOriginalExtension();
            $data->about_image = $filename1;
            $files->move($destinationPath1, $filename1);
        }
        $data->about_title = $request->about_title;
        $data->sub_title = $request->sub_title;
        $data->description = $request->description;
        $data->btn_link = $request->btn_link;
        $data->point1 = $request->point1;
        $data->point2 = $request->point2;
        $data->point3 = $request->point3;
        $data->point4 = $request->point4;
        $data->save();

        return redirect('About')->with('success', 'Record Inserted Successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
