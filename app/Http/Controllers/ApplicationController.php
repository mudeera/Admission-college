<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $applications=application::all();
        return view('components.applications.index',compact('applications'));
    }

    public function admissions()
    {
        //
        $applications=application::all();
        return view('components.applications.admissions',compact('applications'));
    }

    public function statistics()
    {
        //
        $applications=application::all();
        return view('components.applications.statistics',compact('applications'));
    }

    public function studentsShortList()
    {
        //
        $applications=application::all();
        return view('components.applications.students-short-list',compact('applications'));
    }

    public function studentsYearList()
    {
        //
        $applications=application::all();
        $courses = course::all();
        return view('components.applications.students-years-list',compact('applications', 'courses'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses=Course::all();
        return view('components.applications.create',compact('courses'));
    }
    public function filter(Request $request)
    {
        $course = $request->query('course');
        $year = $request->query('year');
    
        $query = Application::where('academic_year', $year);
    
        if ($course !== 'all') {
            $query->whereHas('course', function($q) use ($course) {
                $q->where('name', $course);
            });
        }
    
        $applications = $query->with('course')->get();
    
        return response()->json($applications);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $applications = new Application;
        $applications->name = $request->name;
        $applications->fname = $request->fname;
        $applications->cnic = $request->cnic;
        $applications->email = $request->email;
        $applications->p_no = $request->p_no;
        $applications->address = $request->address;
        $applications->gender = $request->gender;
        $applications->district = $request->district;
        $applications->course_id = $request->course_id;
        $applications->obtained_percentage = $request->obtained_percentage;
        $applications->academic_year = $request->academic_year;

        // Handle image uploads
        $imageFields = ['image', 'character', 'Domicile', 'cnicofGuardian', 'marksheet'];

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                $filename = time() . '_' . $field . '.' . $request->file($field)->getClientOriginalExtension();
                $request->file($field)->storeAs('application', $filename, 'public');
                $applications->$field = $filename;
            }
        }

        $applications->save();
        session()->put('success', 'Application has been saved successfully.');
        return redirect()->route('apply.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $applications=application::find($id);
        return view('components.applications.show',compact('applications'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $courses = Course::all();
        $applications=application::find($id);
        return view('components.applications.edit',compact('applications','courses'));
    }

    
    public function update(Request $request, $id)
    {
        $application= application::find($id);
        $application = $request->isMethod('post') ? new Application : Application::findOrFail($request->id);
        $application->name = $request->name;
        $application->fname = $request->fname;
        $application->cnic = $request->cnic;
        // $application->email = $request->email;
        $application->p_no = $request->p_no;
        $application->address = $request->address;
        // $application->gender = $request->gender;
        $application->district = $request->district;
        $application->course_id = $request->course_id;
        $application->obtained_percentage = $request->obtained_percentage;
        $application->academic_year = $request->academic_year;

        $imageFields = ['image', 'character', 'Domicile', 'cnicofGuardian', 'marksheet'];

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                $filename = time() . '_' . $field . '.' . $request->file($field)->getClientOriginalExtension();
                $request->file($field)->storeAs('application', $filename, 'public');
                $application->$field = $filename;
            }
        }
            $application->update();
            return redirect()->route('application.index',$application->id);
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $applications=application::find($id);
        $applications->delete();
        return redirect()->route('application.index');
    }
}
