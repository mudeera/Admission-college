<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;
use App\Models\event;
use App\Models\Course;
use App\Models\applicationModel;


class FrontPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function welcome(){
        $blogs = Blog::limit(8)->get();
        $events = event::limit(8)->get();
        $courses = course::limit(8)->get();
        $applicationModel = applicationModel::all();
        return view('welcome', compact('blogs','events','courses','applicationModel'));
    }
    // public function mudeera()
    // {
    //     $user_info = [
    //         'name' => 'Mudeera',
    //         'email' => 'mudeera@gmail.com',
    //         'phone_number' => '1234567890',
    //     ];

    //     return response()->json($user_info);
    // }
    public function About()
    {
    
        $applicationModel = applicationModel::all();
        return view('components.pages.About',compact('applicationModel'));
    }

    public function Course(){
        $courses = Course :: all();
        $courses = Course::paginate(20);
        $applicationModel = applicationModel::all();
        return view('components.pages.Course', compact('courses','applicationModel'));
    }

    public function Event(){
        $events = event :: all();
        $events = event::paginate(20);
        $applicationModel = applicationModel::all();
        return view('components.pages.Event', compact('events','applicationModel'));
    }

    public function Blog(){
        $blogs = blog :: all();
        $blogs = blog::paginate(20);
        $applicationModel = applicationModel::all();
        return view('components.pages.Blog', compact('blogs','applicationModel'));
    }
    public function Contact(){
        $applicationModel = applicationModel::all();
        return view('components.pages.Contact',compact('applicationModel'));
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
}
