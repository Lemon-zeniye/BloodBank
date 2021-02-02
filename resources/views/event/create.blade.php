@extends('lay.layouts')
@section('content')
<form action="/events" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center">Add Event</h1>
            <div class="form-group row">
                <div class="col-md-9">
                    <label for="title" class="col-form-label">Title</label>
                    <input id="title" name="title" type="text" placeholder="" class="form-control" value="{{old('title')}}">
                <div>
                    @error('title')
                        <span role="alert">
                            <small class="text-danger">{{ $message }}</small>
                        </span>
                    @enderror
               </div>
               <label for="title" class="col-form-label">Discription</label>
                <input id="title" name="description" type="text" placeholder="" class="form-control" value="{{old('description')}}">
                <div>
                    @error('description')
                        <span role="alert">
                            <small class="text-danger">{{ $message }}</small>
                        </span>
                    @enderror
                </div>
                 <label for="image">Photo</label><br>
                <input type="file" name="image" id="image">
                <div>
                    @error('image')
                        <span>
                            <small class="text-danger">{{$message}}</small>
                        </span>
                    @enderror 
                </div>           
         <div class="col-sm-12 col-md-12 col-lg-9 col-xs-12" style="text-align:right">
         <button class="btn btn-primary mb-5">Add</button>
    </div>
</form>
@endsection
