<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\client;
use File;


class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {       
        $data = DB::table('clients')->select('*')->get();
        return view('Backend.Clients.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.CLients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

            $data = new client();

            $filename = "";
            $destinationPath = public_path('Backend/images/client/');
            $status = true;
            if ($request->hasFile('image')) {
                $files = $request->file('image');
                $filename="Client-".strtotime(date('d-m-Y h:i:s')).".".$files->getClientOriginalExtension();
                $data->image = $filename;
                $files->move($destinationPath,$filename);
                
            }
            $data->name = $request->name;
            
            $data->save();

            return redirect('Clients')->with('success', 'Record Inserted Successfully');
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
        $data = client::find($id);
        return view('Backend.Clients.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

            $data = client::find($id);
            $filename = "";
            $destinationPath = public_path('Backend/images/client/');
            if ($request->hasFile('image')) {
                $files = $request->file('image');
                //Remove Old Image    
                $usersImage = public_path("Backend/images/client/$data->image"); // get previous image from folder
                if (File::exists($usersImage)) {
                File::delete($usersImage);
                }
                //Upload Image
                $filename="Client-".strtotime(date('d-m-Y h:i:s')).".".$files->getClientOriginalExtension();
                $data->image = $filename;
                $files->move($destinationPath,$filename);
            }
            $data->name = $request->name;
            $data->save();

            return redirect('Clients')->with('success', 'Record Inserted Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = client::find($id)->delete();
        return redirect('Clients');
    }
}
