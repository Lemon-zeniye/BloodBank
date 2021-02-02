@extends('lay.layouts')
@section('content')
<form action="/donor/{{$donor->id}}/question" method="post">
    @csrf
   <div class="row justify-content-center">
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <ul class="list-group">
            <li class="list-group-item pb-1 d-flex justify-content-between">1 Feeling healthy and well today? 
              <div>
                <label class="pr-2" for="oneyes"> Yes <input name="one" id="oneyes" type="radio" value="Yes"></label>
                <label class="pr-2" for="oneno"> No <input name="one" id="oneno" type="radio" value="No"></label>
              </div>
            </li> 
            @error('one')
                <span role="aler" class="pr-4" style="text-align:right">
                    <small class="text-danger" >This field is required.</small>
                </span>
            @enderror
            <li class="list-group-item pb-1 d-flex justify-content-between">2 Currently taking an antibiotic?
              <div>
                <label class="pr-2" for="twoyes"> Yes <input name="two" id="twoyes" type="radio" value="Yes"></label>
                <label class="pr-2" for="twono"> No <input name="two" id="twono" type="radio" value="No"></label>
              </div>
            </li> 
             @error('two')
                <span role="aler" class="pr-4" style="text-align:right">
                    <small class="text-danger" >This field is required.</small>
                </span>
            @enderror
            <li class="list-group-item pb-1 d-flex justify-content-between">3 Currently taking any other medications for an infection?
              <div>
                <label class="pr-2" for="threeyes"> Yes <input name="three" id="threeyes" type="radio" value="Yes"></label>
                <label class="pr-2" for="threeno"> No <input name="three" id="threeno" type="radio" value="No"></label>
              </div>
            </li> 
             @error('three')
                <span role="aler" class="pr-4" style="text-align:right">
                    <small class="text-danger" >This field is required.</small>
                </span>
            @enderror
        </ul>
        <div class="pt-3" style="text-align:right">
            <button class="btn btn-sm btn-success">submit</button>
        </div>
      </div>  
   </div> 
</form>
@endsection