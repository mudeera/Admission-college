<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use App\Models\blog;
use App\Models\event;
use App\Models\Course;
use App\Models\applicationModel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        ini_set('memory_limit', '2048M');
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $applications=application::all();
        // return view('home', compact('applications'));
        $blogs = blog::all();
        $events = Event::all();
        $applications = Application::all();
        $courses = Course::all();
        $applicationModel = applicationModel::all();
        return view('home', compact('blogs','events','applications','courses','applicationModel'));
    }
}
