<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\contact;

class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('contacts')->select('*')->first();
        return view('Backend.ContactUs.list',compact('data'));
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
            'email' => 'required',
            'phone1' => 'required',
            'phone2' => 'required',
            'address' => 'required',
            'phone3' => 'required',
            'map_link' => 'required',
        ]);

                $data = contact::find($id);
                $data->email = $request->email;
                $data->phone1 = $request->phone1;
                $data->phone2 = $request->phone2;
                $data->address = $request->address;
                $data->phone3 = $request->phone3;
                $data->map_link = $request->map_link;
                $data->save();

                return redirect('ContactUs')->with('success', 'Record Inserted Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
