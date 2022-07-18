<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
  public function index()
	{
		$courses =  Course::all();
		return view('courses.index', compact('courses'));
	}

  public function create(){
    $user = auth()->user();
    if ($user == null) {
        return redirect('/login');
    }else{
      return view('courses.create');
    }
  }

  public function store(Request $request){
    $user = auth()->user();
    if ($user == null) {
        return redirect('/login');
    }else{
      $course = $user->courses()->create([
        'title' => $request['title'],
        'url' => $request['url'],
        'testimony' => $request['testimony'],
        'inscription' => $request['inscription'],
        'syllabus' => $request['syllabus'],
        'calendar' => $request['calendar'],
        //'inscription' => json_encode($request['inscription']),
      ]);
      return response("create $course->id");
    }
  }

  public function show(Course $course){
    return view('courses.show', compact('course'));
  }

  public function edit(Course $course) {
    return view('courses.edit', compact('course'));
  }

  public function update(Request $request, $id) {
    $user = auth()->user();
    if ($user == null) {
      return redirect('/login');
    }else{
      $course = Course::find($id);
      $course->title = $request->get('title');
      $course->url = $request->get('url');
      $course->testimony = $request->get('testimony');
      $course->inscription = $request->get('inscription');
      $course->syllabus = $request->get('syllabus');
      $course->calendar = $request->get('calendar');
      $course->save();
  
      return response("edit $course->id");
    }
    // dd($course->calendar);
    
  }
}
