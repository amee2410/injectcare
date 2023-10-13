<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\blog;
use File;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('blogs')->select('*')->get();
        return view('Backend.Blogs.list', compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.Blogs.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'title' => 'required',
            'slug' => 'required',
            'short_desc' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'large_img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'banner_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = new blog();

        $filename = "";
        $destinationPath = public_path('Backend/images/blogs/');
        $status = true;
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            $filename = "Blog-" . strtotime(date('d-m-Y h:i:s')) . "." . $files->getClientOriginalExtension();
            $data->image = $filename;
            $files->move($destinationPath, $filename);
        }

        $filename1 = "";
        $destinationPath = public_path('Backend/images/blogdetail/');
        $status = true;
        if ($request->hasFile('large_img')) {
            $files = $request->file('large_img');
            $filename1 = "Blog-" . strtotime(date('d-m-Y h:i:s')) . "." . $files->getClientOriginalExtension();
            $data->large_img = $filename1;
            $files->move($destinationPath, $filename1);
        }
        $filename2 = "";
        $destinationPath = public_path('Backend/images/pagebnr/');
        $status = true;
        if ($request->hasFile('banner_image')) {
            $files = $request->file('banner_image');
            $filename2 = "Blog-" . strtotime(date('d-m-Y h:i:s')) . "." . $files->getClientOriginalExtension();
            $data->banner_image = $filename1;
            $files->move($destinationPath, $filename2);
        }
        $data->title = $request->title;
        $data->slug = $request->slug;
        $data->short_desc = $request->short_desc;
        $data->description = $request->description;
        $data->meta_title = $request->meta_title;
        $data->meta_keywords = $request->meta_keywords;
        $data->meta_description = $request->meta_description;
        $data->save();

        return redirect('Blogs')->with('success', 'Record Inserted Successfully');
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
        $data = blog::find($id);
        return view('Backend.Blogs.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = \Validator::make($request->all(), [
            'title' => 'required',
            'slug' => 'required',
            'short_desc' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'large_img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'banner_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = blog::find($id);

        $filename = "";
        $destinationPath = public_path('Backend/images/blogs/');
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            //Remove Old Image    
            $usersImage = public_path("Backend/images/blogs/$data->image"); // get previous image from folder
            if (File::exists($usersImage)) {
                File::delete($usersImage);
            }
            //Upload Image
            $filename = "Blog-" . strtotime(date('d-m-Y h:i:s')) . "." . $files->getClientOriginalExtension();
            $data->image = $filename;
            $files->move($destinationPath, $filename);
        }
        $filename1 = "";
        $destinationPath = public_path('Backend/images/blogdetail/');
        if ($request->hasFile('large_img')) {
            $files = $request->file('large_img');
            //Remove Old Image    
            $usersImage = public_path("Backend/images/blogdetail/$data->large_img"); // get previous image from folder
            if (File::exists($usersImage)) {
                File::delete($usersImage);
            }
            //Upload Image
            $filename1 = "Blog-" . strtotime(date('d-m-Y h:i:s')) . "." . $files->getClientOriginalExtension();
            $data->large_img = $filename1;
            $files->move($destinationPath, $filename1);
        }
        $filename2 = "";
        $destinationPath = public_path('Backend/images/pagebnr/');
        if ($request->hasFile('banner_image')) {
            $files = $request->file('banner_image');
            //Remove Old Image    
            $usersImage = public_path("Backend/images/pagebnr/$data->banner_image"); // get previous image from folder
            if (File::exists($usersImage)) {
                File::delete($usersImage);
            }
            //Upload Image
            $filename2 = "Blog-" . strtotime(date('d-m-Y h:i:s')) . "." . $files->getClientOriginalExtension();
            $data->banner_image = $filename2;
            $files->move($destinationPath, $filename2);
        }
        $data->title = $request->title;
        $data->slug = $request->slug;
        $data->short_desc = $request->short_desc;
        $data->description = $request->description;
        $data->meta_title = $request->meta_title;
        $data->meta_keywords = $request->meta_keywords;
        $data->meta_description = $request->meta_description;
        $data->save();

        return redirect('Blogs')->with('success', 'Record Inserted Successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = blog::find($id)->delete();
        return redirect('Blogs');
    }
}
