<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view("courses.index", $courses);
    }

    public function create()
    {
        return view("course.create");
    }

    public function store(StoreCourseRequest $request)
    {
        $validated = $request->validate();
        Course::create($validated);
        return redirect()->route("courses.index")->with("success", "Course successfully created!");
    }

    
}
