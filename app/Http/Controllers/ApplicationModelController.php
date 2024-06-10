<?php

namespace App\Http\Controllers;

use App\Models\applicationModel;
use Illuminate\Http\Request;

class ApplicationModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $applicationmodel=applicationModel::all();
        return view('components.applicationmodel.index',compact('applicationmodel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('components.applicationmodel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $applicationmodel= new applicationModel;
        $applicationmodel->message = $request->message;
        $applicationmodel->is_admission = $request->is_admission;
        $applicationmodel->type = $request->type;
        $applicationmodel->save();
        return redirect()->route('applicationModel.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(applicationModel $applicationModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $applicationmodel=applicationModel::find($id);
        return view('components.applicationmodel.edit',compact('applicationmodel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $applicationmodel= applicationModel::find($id);
        $applicationmodel->message=$request->message;
        $applicationmodel->is_admission = $request->is_admission;
        $applicationmodel->type = $request->type;
        $applicationmodel->update();
        return redirect()->route('applicationModel.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $applicationmodel=applicationModel::find($id);
        $applicationmodel->delete();
        return redirect()->route('applicationModel.index');
    }
}
