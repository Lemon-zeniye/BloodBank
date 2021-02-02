@extends('lay.layouts')
@section('content')
@if($donor->question->one == 'Yes')
    @if($donor->question->two == 'Yes')
        @if($donor->question->three == 'Yes')
            <div class="container" style="text-align:center">
                <div class="jumbotron">
                    <h1>Congratulation</h1>
                    <h3>You Pass The Quesstionnaire You Can Donate</p>
                    <p class="btn btn-primary btn-lg" role="button">Donate Blood Save Life</p>
                </div>
            </div>
        @else
            <div class="container" style="text-align:center">
                <div class="jumbotron">
                    <h1>Sorry</h1>
                    <h3>You Pass The Quesstionnaire You Can Donate</p>
                    <p class="btn btn-primary btn-lg" role="button">Donate Blood Save Life</p>
                </div>
            </div>
        @endif
    @else
        <div class="container" style="text-align:center">
            <div class="jumbotron">
                <h1>Sorry</h1>
                <h3>You Pass The  Quesstionnaire You Can Donate</p>
                <p class="btn btn-primary btn-lg" role="button">Donate Blood Save Life</p>
            </div>
        </div>
    @endif
@else
    <div class="container" style="text-align:center">
        <div class="jumbotron">
            <h1>Sorry</h1>
            <h3>You Pass The Quesstionnaire You Can Donate</p>
            <p class="btn btn-primary btn-lg" role="button">Donate Blood Save Life</p>
        </div>
    </div>
@endif
@endsection
