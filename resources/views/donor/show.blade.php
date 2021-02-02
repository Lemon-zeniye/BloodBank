@extends('lay.layouts')
@section('content')
<div class="container pt-5 pb-5">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card ">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 justify-content-center">
                        <div class="col-md-4 col-sm-4 col-xs-12 justify-content-center align-items-center pt-4"  style="background-color:#ffffff; text-align:center ">
                            <img src="/svg/blood.png" style="height:200px;  width:150px">
                        </div>
                    </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="" style="text-align:right;" >
                        <span class="pr-3 pt-1 pl-3 pb-1 "  style="background-color:red; color:white;">{{$donor->bloodgroup}}</span>
                    </div>
                    <h4 class="text-primary"><strong>{{$donor->name}}</strong></h4>
                    <div>
                        <b> {{$donor->email}}</b><br>
                        <b>Mobile:<a href="tel:{{$donor->mobile}}"><b> {{$donor->mobile}}</b></a></b> <br>
                        <b> With Us from </b>{{$donor->created_at->toDateString()}} <br>
                        <b> Last Donation</b> {{$donor->Lday}} - {{$donor->Lmonth}} - {{$donor->Lyear}}<br>
                        <b>Location</b> {{$donor->state}} - {{$donor->district}} - {{$donor->village}}<br>
                            <div class="" style="text-align:right">
                                @can('delete', $donor)
                                    <a class="btn btn-primary" href="/donor/{{$donor->id}}/question/create">Take A Questionnaire</a>
                                @endcan
                            </div> 
                            <form action="/donor/{{$donor->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <div style="text-align:right" >
                                    @can('delete', $donor)
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    @endcan
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
