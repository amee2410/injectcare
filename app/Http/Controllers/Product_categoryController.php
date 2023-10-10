<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\product_category;
use File;

class Product_categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('product_categories')->select('*')->get();
        return view('Backend.Category.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.Category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'category_name' => 'required',
            'category_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'slug' => 'required',
        ]);

        $data = new product_category();
        $filename = "";
        $destinationPath = public_path('Backend/images/product_category/');
        $status = true;
        if ($request->hasFile('category_image')) {
            $files = $request->file('category_image');
            $filename="Category image-".strtotime(date('d-m-Y h:i:s')).".".$files->getClientOriginalExtension();
            $data->category_image = $filename;
            $files->move($destinationPath,$filename);            
        }  
            $data->category_name = $request->category_name;
            $data->slug = $request->slug;
            
            $data->save();

            return redirect('Category')->with('success', 'Record Inserted Successfully');
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
        $data = product_category::find($id);
        return view('Backend.Category.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = \Validator::make($request->all(), [
            'category_name' => 'required',
            'category_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'slug' => 'required',
        ]);

            $data = product_category::find($id);

            $filename = "";
            $destinationPath = public_path('Backend/images/product_category/');
            if ($request->hasFile('category_image')) {
                $files = $request->file('category_image');
                //Remove Old Image    
                $usersImage = public_path("Backend/images/product_category/$data->category_image"); // get previous image from folder
                if (File::exists($usersImage)) {
                File::delete($usersImage);
                }
                //Upload Image
                $filename="Category image-".strtotime(date('d-m-Y h:i:s')).".".$files->getClientOriginalExtension();
                $data->category_image = $filename;
                $files->move($destinationPath,$filename);
            }
            
            $data->category_name = $request->category_name;
            $data->slug = $request->slug;
            $data->save();


            return redirect('Category')->with('success', 'Record Inserted Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = product_category::find($id)->delete();
        return redirect('Category');
    }
}
