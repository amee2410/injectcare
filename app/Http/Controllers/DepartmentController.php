<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\department;
use File;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('departments')->select('*')->get();
        return view('Backend.Department.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.Department.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
        ]);

        $data = new department();

        $filename = "";
        $destinationPath = public_path('Backend/images/department/');
        $status = true;
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            $filename = "Department-" . strtotime(date('d-m-Y h:i:s')) . "." . $files->getClientOriginalExtension();
            $data->image = $filename;
            $files->move($destinationPath, $filename);
        }

        $data->title = $request->title;
        $data->description = $request->description;
       
        $data->save();

        return redirect('Department')->with('success', 'Record Inserted Successfully');
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
        $data = department::find($id);
        return view('Backend.Department.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
   {
        $validator = \Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',       
           
        ]);

        $data = department::find($id);

        $filename = "";
        $destinationPath = public_path('Backend/images/department/');
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            //Remove Old Image    
            $usersImage = public_path("Backend/images/department/$data->image"); // get previous image from folder
            if (File::exists($usersImage)) {
                File::delete($usersImage);
            }
            //Upload Image
            $filename = "Department-" . strtotime(date('d-m-Y h:i:s')) . "." . $files->getClientOriginalExtension();
            $data->image = $filename;
            $files->move($destinationPath, $filename);
        }
        $data->title = $request->title;
        $data->description = $request->description;
        
        $data->save();

        return redirect('Department')->with('success', 'Record Inserted Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = department::find($id)->delete();
        return redirect('Department');
    }
}
