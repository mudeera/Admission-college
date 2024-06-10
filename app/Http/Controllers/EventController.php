<?php

namespace App\Http\Controllers;

use App\Models\event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $events=event::all();
        return view('components.events.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('components.events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $events= new event;
        $events->date = $request->date;
        $events->title = $request->title;
        $events->description = $request->description;
        if($request['image']!=""){
            $filename=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('event',$filename,'public');
            $events->image=$filename;
            // dd($request->file('image')->storeAs('event',$filename,'public'));
        }
        $events->save();
        return redirect()->route('event.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $events=event::find($id);
        return view('components.events.show',compact('events'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $events=event::find($id);
        return view('components.events.edit',compact('events'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $events= event::find($id);
        // $events->name = $request->name;
        $events->date = $request->date;
        $events->title = $request->title;
        $events->description = $request->description;
        // $events=event::find($id);
        if($request['image']!=""){
            $file=storage_path("event/".$events->image);
            File::delete($file);
            $filename=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('event',$filename,'public');
            $events->image=$filename;
        }
        
        $events->update();
        return redirect()->route('event.index',$events->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $events=event::find($id);
        $events->delete();
        return redirect()->route('event.index');
    }
}
