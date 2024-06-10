<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $courses=course::all();
        return view('components.courses.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('components.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $courses= new course;
        $courses->name = $request->name;
        $courses->description = $request->description;
        $courses->duration = $request->duration;
        if($request['image']!=""){
            $filename=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('course',$filename,'public');
            $courses->image=$filename;
        }
        if($request['pdf']!=""){
            $filename=time().".".$request->file('pdf')->getClientOriginalExtension();
            $request->file('pdf')->storeAs('course',$filename,'public');
            $courses->pdf=$filename;
        }
        $courses->save();
        return redirect()->route('course.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $courses=course::find($id);
        return view('components.courses.show',compact('courses'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $courses=course::find($id);
        return view('components.courses.edit',compact('courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $courses= course::find($id);
        $courses->name = $request->name;
        $courses->description = $request->description;
        $courses->duration = $request->duration;
        // $courses=course::find($id);
        if($request['image']!=""){
            $file=storage_path("course/".$courses->image);
            File::delete($file);
            $filename=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('course',$filename,'public');
            $courses->image=$filename;
        }
        
        $courses->update();
        return redirect()->route('course.index',$courses->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $courses=course::find($id);
        $courses->delete();
        return redirect()->route('course.index');
    }
}
