<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        // $courses = [
        //     ['name' => 'PHP'],
        //     ['name' => 'Java'],
        //     ['name' => 'Python'],
        //     ['name' => 'Javascript']
        // ];

        $courses = Course::paginate(4);

        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    
    }

    public function show($id)
    {
        $course = Course::find($id);

        return view("/courses/show", compact('course'));
    }
}
