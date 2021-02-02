@extends('lay.layouts')
@section('content')
<div class="auto-container p-5">
    <div class="row clearfix">
        <div class="content-side col-md-9 offset-1">
        <h1>Events List</h1>
        @foreach($events as $event)
           <div class="card mb-4">
                <div class="card-body">
                    <div class="row clearfix">
                        <div class="col-sm-4 col-md-4 ">
                            <br>
                            <figure class="image margain-top-bottom-15">
                                    <a href="/events/{{$event->id}}"><img src="/storage/{{$event->image}}" class="w-100" alt="image"></a>
                            </figure>
                        </div>
                        
                        <div class="col-sm-8 col-md-8 ">
                            <div class="lower-content">
                                <h3><a href="/events/{{$event->id}}">{{$event->title}}</a></h3>
                                <h5 class="hide"><a href="#">By Blood Bank</a></h5>
                                <div class="text">
                                    {{$event->description}}<br>
                                    <br>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="col-md-12">
                        <div class="clearfix row ">
                            <div class="clearfix p-2">
                                <div><a href="#">{{$event->created_at->toDateString()}}</a></div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        @endforeach
        {{$events->links()}} 
      </div>
      </div> 
</div>
@endsection