<?php

namespace App\Http\Controllers;

use App\Models\marks;
use App\Models\Application;
use Illuminate\Http\Request;

class MarksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('components.Add-marks');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'application_id' => 'required|exists:applications,id',
            'marks' => 'required|integer|min:0|max:100',
        ]);
    
        // Check if marks already exist for the given application_id
        $mark = Marks::where('application_id', $request->application_id)->first();
    
        if ($mark) {
            // If marks exist, update the existing record
            $mark->marks = $request->marks;
            $message = 'Marks updated successfully!';
        } else {
            // If marks do not exist, create a new record
            $mark = new Marks;
            $mark->application_id = $request->application_id;
            $mark->marks = $request->marks;
            $message = 'Marks added successfully!';
        }
    
        // Save the mark record
        $mark->save();
    
        // Redirect back to home with a success message
        return redirect()->route('home')->with('status', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(marks $marks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(marks $marks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        $marks = Marks::find($id);
        $marks->marks = $request->marks;
        $marks->save();
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(marks $marks)
    {
        //
    }
}
