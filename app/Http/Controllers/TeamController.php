<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\team;
use File;


class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('teams')->select('*')->get();
        return view('Backend.Team.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.Team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'designation' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = new team();

        $filename = "";
        $destinationPath = public_path('Backend/images/team/');
        $status = true;
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            $filename = "Team-" . strtotime(date('d-m-Y h:i:s')) . "." . $files->getClientOriginalExtension();
            $data->image = $filename;
            $files->move($destinationPath, $filename);
        }

        $data->name = $request->name;
        $data->designation = $request->designation;
       
        $data->save();

        return redirect('Team')->with('success', 'Record Inserted Successfully');
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
        $data = team::find($id);
        return view('Backend.Team.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'designation' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           
        ]);

        $data = team::find($id);

        $filename = "";
        $destinationPath = public_path('Backend/images/team/');
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            //Remove Old Image    
            $usersImage = public_path("Backend/images/team/$data->image"); // get previous image from folder
            if (File::exists($usersImage)) {
                File::delete($usersImage);
            }
            //Upload Image
            $filename = "Team-" . strtotime(date('d-m-Y h:i:s')) . "." . $files->getClientOriginalExtension();
            $data->image = $filename;
            $files->move($destinationPath, $filename);
        }

        $data->name = $request->name;
        $data->designation = $request->designation;
        
        $data->save();

        return redirect('Team')->with('success', 'Record Inserted Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = team::find($id)->delete();
        return redirect('Team');
    }
}
