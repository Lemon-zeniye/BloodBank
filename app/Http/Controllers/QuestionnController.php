<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionnaire;
use App\Questionn;
class QuestionnController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function create(Questionnaire $questionnaire){
        return view('questionn.create',compact('questionnaire'));
    }
    public function store(Questionnaire $questionnaire){
        $data = request()->validate([
            'questionn.questionn' => 'required',
            'answers.*.answer' => 'required'
        ]);
       $question = $questionnaire->questionns()->create($data['questionn']);
       $question->answers()->createMany($data['answers']);

        return redirect('/questionnaire/'.$questionnaire->id);
    }
    public function destroy(Questionnaire $questionnaire,Questionn $questionn){
        $questionn->answers()->delete();
        $questionn->delete();

        return redirect($questionnaire->path());
    }
}
