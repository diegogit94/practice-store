<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Http\Requests\CourseRequest;

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

    public function store(CourseRequest $request)
    {
        $course = Course::create($request->all());

        return redirect(route('courses.show', $course->id)); // I could only put "course" without access to id attribute
    }

    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    public function update(CourseRequest $request, Course $course)
    {
        $course->update($request->all());

        return redirect(route('courses.show', $course->id));
    }
}
