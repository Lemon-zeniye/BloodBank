<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionnaire;
class SurveyController extends Controller
{
    
    public function create(Questionnaire $questionnaire){
        return view('survey.create',compact('questionnaire'));
    }
    public function store(Questionnaire $questionnaire){
        $data = request()->validate([
            'responses.*.answer_id' => 'required',
            'responses.*.questionn_id' => 'required',
            'survey.name' => 'required',
            'survey.email' => 'required'
        ]);
        $survey = $questionnaire->surveys()->create($data['survey']);
        $survey->responses()->createMany($data['responses']);

        return redirect('/questionnaire/'.$questionnaire->id);
    }
}
