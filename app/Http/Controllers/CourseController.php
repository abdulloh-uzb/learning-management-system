<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view("courses.index", $courses);
    }

    public function store(StoreCourseRequest $request)
    {
        dd($request->all());
        $validated = $request->validate();
        Course::create($validated);
        return redirect()->route("courses.index")->with("success", "Course successfully created!");
    }

    public function edit(Course $course)
    {
        return view("courses.edit", $course);
    }

    public function update()
    {
        
    }

    public function show(Course $course)
    {
        return view("courses.show", $course);
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route("courses.index")->with("success", "Course successfully deleted!");
    }
    
}
