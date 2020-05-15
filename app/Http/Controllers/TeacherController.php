<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class TeacherController extends Controller
{
    /**
     * Show Trainee list.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('teacher', ['teachers'=>$teachers]);
    }


    /**
     * Add a trainee in database
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function add_teacher(Request $request)
    {
        $teacher = new Teacher;
        $teacher->name = $request->name;
        $teacher->surname = $request->surname;
        $teacher->hour = $request->hour;
        $teacher->save();

        return redirect('teacher');
    }
}
