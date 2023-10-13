<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Maincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner = DB::table('banners')->select('*')->get();
        $feature = DB::table('features')->select('*')->first();
        $about = DB::table('abouts')->select('*')->first();
        $counter = DB::table('counters')->select('*')->get();
        $team = DB::table('teams')->select('*')->get();
        $department = DB::table('departments')->select('*')->get();
        $clients = DB::table('clients')->select('*')->get();
        $certificate = DB::table('certificates')->select('*')->get();
        return view('Frontend.index', compact('banner', 'feature', 'about', 'counter', 'team', 'department', 'clients', 'certificate'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function contact()
    {
       return view('Frontend.contact-us');
    }
}
