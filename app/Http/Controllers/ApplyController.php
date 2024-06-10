<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\applicationModel;
use App\Models\Course;

class ApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Apply()
    {
        $applicationModel = applicationModel::all();
        return view('components.apply.index', compact('applicationModel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses=Course::all();
        $applicationModel = applicationModel::all();
        return view('components.apply.admission-form', compact('applicationModel','courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $apply= new apply;
        $apply->name = $request->name;
        $apply->description = $request->description;
        $apply->duration = $request->duration;
        if($request['image']!=""){
            $filename=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('apply',$filename,'public');
            $apply->image=$filename;
        }
        if($request['pdf']!=""){
            $filename=time().".".$request->file('pdf')->getClientOriginalExtension();
            $request->file('pdf')->storeAs('apply',$filename,'public');
            $apply->pdf=$filename;
        }
        $apply->save();
        return redirect()->route('apply.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $apply=apply::find($id);
        return view('components.apply.show',compact('apply'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $apply=apply::find($id);
        return view('components.apply.edit',compact('apply'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $apply= apply::find($id);
        $apply->name = $request->name;
        $apply->description = $request->description;
        $apply->duration = $request->duration;
        // $courses=course::find($id);
        if($request['image']!=""){
            $file=storage_path("apply/".$apply->image);
            File::delete($file);
            $filename=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('apply',$filename,'public');
            $apply->image=$filename;
        }
        
        $apply->update();
        return redirect()->route('apply.index',$apply->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $apply=apply::find($id);
        $apply->delete();
        return redirect()->route('apply.index');
    }
}
