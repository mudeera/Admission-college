<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $blogs=blog::all();
        return view('components.blogs.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('components.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $blogs= new blog;
        $blogs->name = $request->name;
        $blogs->date = $request->date;
        $blogs->title = $request->title;
        $blogs->description = $request->description;
        if($request['image']!=""){
            $filename=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('blog',$filename,'public');
            $blogs->image=$filename;
            // dd($request->file('image')->storeAs('blog',$filename,'public'));
        }
        $blogs->save();
        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $blogs=blog::find($id);
        return view('components.blogs.show',compact('blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blogs= blog::find($id);
        return view('components.blogs.edit',compact('blogs'));
    }
    public function update(Request $request, $id)
    {
        $blogs= blog::find($id);
        $blogs->name=$request->name;
        $blogs->date = $request->date;
        $blogs->title = $request->title;
        $blogs->description = $request->description;
        // $blogs= blog::find($id);
        if($request['image']!=""){
            $file=storage_path("blog/".$blogs->image);
            File::delete($file);
            $filename=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('blog',$filename,'public');
            $blogs->image=$filename;
        }
        
        $blogs->update();
        return redirect()->route('blog.index',$blogs->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $blogs=blog::find($id);
        $blogs->delete();
        return redirect()->route('blog.index');
    }
}
