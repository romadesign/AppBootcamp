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
}
