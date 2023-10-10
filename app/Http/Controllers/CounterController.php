<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\counter;
use File;


class CounterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('counters')->select('*')->get();
        return view('Backend.Counter.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.Counter.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'title' => 'required',
            'number' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = new counter();
        $filename = "";
        $destinationPath = public_path('Backend/images/counter/');
        $status = true;
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            $filename = "Counter-" . strtotime(date('d-m-Y h:i:s')) . "." . $files->getClientOriginalExtension();
            $data->image = $filename;
            $files->move($destinationPath, $filename);
        }

        $data->title = $request->title;
        $data->number = $request->number;

        $data->save();

        return redirect('Counter')->with('success', 'Record Inserted Successfully');
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
        $data = counter::find($id);
        return view('Backend.Counter.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = \Validator::make($request->all(), [
            'title' => 'required',
            'number' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = counter::find($id);
        $filename = "";
        $destinationPath = public_path('Backend/images/counter/');
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            //Remove Old Image    
            $usersImage = public_path("Backend/images/counter/$data->image"); // get previous image from folder
            if (File::exists($usersImage)) {
                File::delete($usersImage);
            }
            //Upload Image
            $filename = "Counter-" . strtotime(date('d-m-Y h:i:s')) . "." . $files->getClientOriginalExtension();
            $data->image = $filename;
            $files->move($destinationPath, $filename);
        }

        $data->title = $request->title;
        $data->number = $request->number;
        $data->save();

        return redirect('Counter')->with('success', 'Record Inserted Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = counter::find($id)->delete();
        return redirect('Counter');
    }
}
