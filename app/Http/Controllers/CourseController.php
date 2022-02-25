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

        $courses = Course::orderBy('id', 'desc')->paginate(4);

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

    public function store(Request $request)
    {
        $course = new Course;

        $course->name = $request->name;
        $course->description = $request->description;
        $course->category = $request->category;

        $course->save();

        return redirect(route('courses.show', $course->id)); // I could only put "course" without access to id attribute
    }

    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $course->name = $request->name;
        $course->description = $request->description;
        $course->category = $request->category;

        $course->update();

        return redirect(route('courses.show', $course->id));
    }
}
