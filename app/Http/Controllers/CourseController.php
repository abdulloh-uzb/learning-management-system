<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
use App\Models\Branch;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $branches = Branch::all();
        return view("courses.index", compact("courses","branches"));
    }

    public function store(StoreCourseRequest $request)
    {
        Course::create($request->validated());
        return redirect()->back()->with("message", "success");
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
