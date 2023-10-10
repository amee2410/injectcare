<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\feature;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('features')->select('*')->first();
        return view('Backend.Feature.list', compact('data'));
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
            'feature1' => 'required',
            'feature2' => 'required',
            'feature3' => 'required',
            'feature4' => 'required',
            'icon1' => 'required',
            'icon2' => 'required',
            'icon3' => 'required',
            'icon4' => 'required',
            'description1' => 'required',
            'description2' => 'required',
            'description3' => 'required',
            'time1' => 'required',
            'time2' => 'required',
            'time3' => 'required',
            'day1' => 'required',
            'day2' => 'required',
            'day3' => 'required',
            'btn1_link' => 'required',
            'btn2_link' => 'required',
            'btn1_name' => 'required',
            'btn2_name' => 'required',
            'phone' => 'required',
        ]);
        $data = feature::find($id);

        $data->feature1 = $request->feature1;
        $data->feature2 = $request->feature2;
        $data->feature3 = $request->feature3;
        $data->feature4 = $request->feature4;
        $data->icon1 = $request->icon1;
        $data->icon2 = $request->icon2;
        $data->icon3 = $request->icon3;
        $data->icon4 = $request->icon4;
        $data->description1 = $request->description1;
        $data->description2 = $request->description2;
        $data->description3 = $request->description3;
        $data->time1 = $request->time1;
        $data->time2 = $request->time2;
        $data->time3 = $request->time3;
        $data->day1 = $request->day1;
        $data->day2 = $request->day2;
        $data->day3 = $request->day3;
        $data->btn1_link = $request->btn1_link;
        $data->btn2_link = $request->btn2_link;
        $data->btn1_name = $request->btn1_name;
        $data->btn2_name = $request->btn2_name;
        $data->phone = $request->phone;
        $data->save();

        return redirect('Feature')->with('success', 'Record Inserted Successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
