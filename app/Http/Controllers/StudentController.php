<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $students=student::all();
        return view('components.students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('components.students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'email' => 'required|unique:students',
        ]);
        
        $request->validate([
            'password' => 'required_with:password_confirmation|same:password_confirmation',
        ]);
        $students= new student;
        $students->fname=$request->fname;
        $students->lname=$request->lname;
        $students->dob=$request->dob;
        $students->p_no=$request->p_no;
        $students->address=$request->address;
        $students->gender=$request->gender;
        $students->district=$request->district;
        $students->email = $request->email;
        $students->password=Hash::make($request->newPassword);
        $students->save();
        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $students=student::find($id);
        return view('components.students.show',compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $students=student::find($id);
        return view('components.students.edit',compact('students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $students= student::find($id);
        $students->fname=$request->fname;
        $students->lname=$request->lname;
        $students->dob=$request->dob;
        $students->p_no=$request->p_no;
        $students->address=$request->address;
        $students->gender=$request->gender;
        $students->district=$request->district;
        $students->email = $request->email;

        $students->update();
        return redirect()->route('student.index',$students->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $students=student::find($id);
        $students->delete();
        return redirect()->route('student.index');
    }
}
