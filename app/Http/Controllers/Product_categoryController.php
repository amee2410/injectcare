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
            'slug' => 'required',
        ]);

        $data = new product_category();
       
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
            
            'slug' => 'required',
        ]);

            $data = product_category::find($id);           
            
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
