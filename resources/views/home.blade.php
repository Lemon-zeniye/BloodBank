@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header">Your Questionnaire</div>
                <div class="card-body">
                    <a href="/questionnaire/create" class="btn btn-dark">Crate Questionnaire</a>
                </div>
            </div>
            @foreach($questionnaires as $key => $questionnaire)  
                <div class="card mt-2">
                    <div class="card-body">
                        <a href="/questionnaire/{{$questionnaire->id}}"><strong>{{$key +1 }}</strong> {{$questionnaire->title}}</a>
                       <br>
                        <small class="text-danger">Shared Url</small><br>
                        <a href="{{$questionnaire->publicpath()}}">
                            {{$questionnaire->publicpath()}}
                        </a>
                     </div>
                </div> 
            @endforeach
        </div>
   </div>
 </div>
@endsection
