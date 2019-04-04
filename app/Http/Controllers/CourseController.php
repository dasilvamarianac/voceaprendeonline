<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use App\Http\Requests\CourseRequest;

class CourseController extends Controller
{

    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(CourseRequest $request)
    {
        Course::create($request->all());
        return redirect()->route('course.index')->with('message', 'Curso incluso com sucesso!');
    }

    public function show($id)
    {
        return view('courses.show', compact('course'));
    }

    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    public function update(CourseRequest $request, Course $course)
    {
        $course->update($request->all());
        return redirect()->route('course.index')->with('message', 'Alteração salva com sucesso!');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('course.index')->with('message', 'Item excluído com sucesso!');
    }
}
