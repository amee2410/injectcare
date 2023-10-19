<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\menu;
use File;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('menus')->select('*')->get();
        return view('Backend.Menu.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.Menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'page_name' => 'required',
            'slug' => 'required',
            'banner_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
            $data = new menu();
            $filename = "";
            $destinationPath = public_path('Backend/images/menu/');
            $status = true;
            if ($request->hasFile('banner_image')) {
                $files = $request->file('banner_image');
                $filename="Menu-".strtotime(date('d-m-Y h:i:s')).".".$files->getClientOriginalExtension();
                $data->banner_image = $filename;
                $files->move($destinationPath,$filename);                
            }            
            $data->page_name = $request->page_name;
            $data->slug = $request->slug;
            $data->meta_title = $request->meta_title;
            $data->meta_keywords = $request->meta_keywords;
            $data->meta_description = $request->meta_description;
            $data->save();

            return redirect('Menu')->with('success', 'Record Inserted Successfully');
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
        $data = menu::find($id);
        return view('Backend.Menu.edit', compact('data'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = \Validator::make($request->all(), [
            'page_name' => 'required',
            'slug' => 'required',
            'banner_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $data = menu::find($id);

        $filename = "";
        $destinationPath = public_path('Backend/images/menu/');
        if ($request->hasFile('banner_image')) {
            $files = $request->file('banner_image');
            //Remove Old Image    
            $usersImage = public_path("Backend/images/menu/$data->banner_image"); // get previous image from folder
            if (File::exists($usersImage)) {
                File::delete($usersImage);
            }
            //Upload Image
            $filename = "Menu-" . strtotime(date('d-m-Y h:i:s')) . "." . $files->getClientOriginalExtension();
            $data->banner_image = $filename;
            $files->move($destinationPath, $filename);
        }

        $data->page_name = $request->page_name;
        $data->slug = $request->slug;
        $data->meta_title = $request->meta_title;
        $data->meta_keywords = $request->meta_keywords;
        $data->meta_description = $request->meta_description;
        $data->save();

        return redirect('Menu')->with('success', 'Record Inserted Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = menu::find($id)->delete();
        return redirect('Menu');
    }
    
}
