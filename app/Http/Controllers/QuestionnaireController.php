<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionnaire;
class QuestionnaireController extends Controller
{
    public function __cnostruct(){
        $this->middleware('auth');
    }
    public function create(){
        return view('questionnaire.create');
    }
    public function store(){
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        $questionnaire = auth()->user()->questionnaires()->create($data);
        return redirect('/questionnaire/'.$questionnaire->id);
    }
    public function show(Questionnaire $questionnaire){ 
       $questionnaire->load('questionns.answers.responses');
        return view('questionnaire.show',compact('questionnaire'));
    }
    
}
