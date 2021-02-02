<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donor;
use App\Question;
class QuestionController extends Controller
{
    public function create(Donor $donor){
        $this->authorize('view',$donor);
        return view('question.create',compact('donor'));
    }
    public function store(Donor $donor){
        $data = request()->validate([
            'one' =>'required',
            'two' => 'required',
            'three' => 'required'
        ]);

        $question = $donor->question()->create($data);
        return redirect('/donor/' .$donor->id .'/question/show');
    }
    public function show(Donor $donor){
        return view('question.show',compact('donor'));
    }
}
