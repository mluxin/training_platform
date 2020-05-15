<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trainee;

class TraineeController extends Controller
{
    /**
     * Show the list.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $trainees = Trainee::all();
        return view('trainee', ['trainees'=>$trainees]);
    }

    /**
     * Add a trainee in database
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function add_trainee(Request $request)
    {
       $trainee = new Trainee;
        $trainee->name = $request->name;
        $trainee->surname = $request->surname;
        $trainee->save();

        return redirect('trainee');
    }
}
