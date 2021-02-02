@extends('lay.layouts')
@section('content')
<div class="auto-container p-5">
   <div class="row justify-content-center">
    <div class="col-8">
        <div class="card">
            <div class="card-body">
                <figure class="figure">
                    <img src="/storage/{{$events->image}}" class="w-100" alt="image">
                </figure>
                <div class="">
                    <h1>{{$events->title}}</h1>
                    {{$events->description}}
                </div>
                <form action="/events/{{$events->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <div class="text-right">
                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection