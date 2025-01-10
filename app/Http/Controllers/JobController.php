<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $jobs = [
            "Web Developer",
            "Database Admin",
            "Software Engineer",
            "System Analyst"
        ];
        return view('jobs.index',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) :string
    {
        $title=$request->input("title");
        $description=$request->input("description");

        return "Title: $title, Description: $description";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):string
    {
        return "Showing jobs $id";
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
}