@extends('lay.layouts')
@section('content')
<form action="/donor" method="post">
@csrf
<div class="container">
		<div class="row ">
			<div class="col-md-9">
				<h3 class="pb-4">Login Information</h3>
				<div class="row clearfix rounded">
					<div class="form-group col-lg-6 col-md-6 col-sm-6 ">
						<div class="mb-2"><b>Name</b></div>
						<input class="form-control" name="name" type="text" id="name" placeholder="Enter Name" value="{{ old('name') ?? $user->name }}">
						@error('name')
							<span class="text-danger text-sm" style="font-size:small">{{$message}}</span>
						@enderror
					</div>

					<div class="form-group col-lg-6 col-md-6  col-sm-6 ">
						<div class="mb-2"><b>Email</b></div>
						<input class="form-control" name="email" type="email" id="email" placeholder="Email" value="{{ old('email')}}">
						@error('email')
							<span class="text-danger text-sm" style="font-size:small">{{$message}}</span>
						@enderror
					</div>

					<div class="form-group col-lg-6 col-md-6  col-sm-6 pt-3">
						<div class="mb-2"><b>Mobile No</b></div>
						<input class="form-control" name="mobile" type="text" id="mobile" placeholder="Mobile No." value="{{ old('mobile') ?? '+251'}}">
						@error('mobile')
							<span class="text-danger text-sm" style="font-size:small">{{$message}}</span>
						@enderror
					</div>
					<div class="form-group col-lg-6 col-md-6  col-sm-6 pt-3 ">
						<div class="mb-2"><b>Create Password</b></div>
						<input class="form-control" name="password" type="password" id="password" placeholder="Minimum Length 6" value="{{ old('password')}}">
						@error('password')
							<span class="text-danger text-sm" style="font-size:small">{{$message}}</span>
						@enderror
					</div>
				</div>
				<h3 class="pt-4 pb-3">Donor Information</h3>
				<div class="row clearfix">
					<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<div class="pb-2"><b>Blood Group</b></div>
						<select name="bloodgroup" id="bloodgroup" class="form-control" value="{{ old('bloodgroup')}}">
							<option value="">select Blood Group</option>
							<option value="Don't Know">Dont Know</option>
							<option value="A-">A-</option>
							<option value="A+">A+</option>
							<option value="AB-">AB-</option>
							<option value="AB+">AB+</option>
							<option value="B-">B-</option>
							<option value="B+">B+</option>
							<option value="O-">O-</option>
							<option value="O+">O+</option>
						</select>
						@error('bloodgroup')
							<span class="text-danger text-sm" style="font-size:small">{{$message}}</span>
						@enderror
					</div>
					<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<div class="field-label pb-2"><b>Gender</b></div>
						<select name="gender" id="gender" class="custom-select-box form-control" value="{{ old('gender')}}">
							<option value="">Gender</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
						@error('gender')
							<span class="text-danger text-sm" style="font-size:small">{{$message}}</span>
						@enderror
					</div>
					<div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-6">
						<div class="field-label pb-2 pt-3"><b>Birth Date</b></div>
						<select name="birthdate" id="birthdate" class="form-control form-group-margin">
							<option value="">Date</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
						</select>
						@error('birthdate')
							<span class="text-danger text-sm" style="font-size:small">{{$message}}</span>
						@enderror
					</div>
					<div class="form-group col-lg-3 col-md-3 col-sm-3  col-xs-6 ">
						<div class="pb-2 pt-3"><span class="p-2"><b>Month</b></span></div>
						<select name="month" id="month" class="form-control form-group-margin"  value="{{old('month')}}">
							<option value="">Month</option>
							<option value="Jan">Jan</option>
							<option value="Feb">Feb</option>
							<option value="Mar">Mar</option>
							<option value="Apr">Apr</option>
							<option value="May">May</option>
							<option value="Jun">Jun</option>
							<option value="Jul">Jul</option>
							<option value="Aug">Aug</option>
							<option value="Sep">Sep</option>
							<option value="Oct">Oct</option>
							<option value="Nov">Nov</option>
							<option value="Dec">Dec</option>
						</select>
						@error('month')
							<span class="text-danger text-sm" style="font-size:small">{{$message}}</span>
						@enderror
					</div>
					<div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-6">
						<div class="pb-2 pt-3"><b>Year</b> </div>
						<select name="year" id="year" class="form-control form-group-margin" value="{{old('year')}}">
							<option value="">Year</option>
							<option value="2030">2030</option>
							<option value="2029">2029</option>
							<option value="2028">2028</option>
							<option value="2027">2027</option>
							<option value="2026">2026</option>
							<option value="2025">2025</option>
							<option value="2024">2024</option>
							<option value="2023">2023</option>
							<option value="2022">2022</option>
							<option value="2021">2021</option>
							<option value="2020">2020</option>
							<option value="2019">2019</option>
							<option value="2018">2018</option>
							<option value="2017">2017</option>
							<option value="2016">2016</option>
							<option value="2015">2015</option>
							<option value="2014">2014</option>
							<option value="2013">2013</option>
						</select>
						@error('year')
							<span class="text-danger text-sm" style="font-size:small">{{$message}}</span>
						@enderror
					</div>
					<div class="form-group col-lg-3 col-md-3 col-sm-3  col-xs-6">
						<div class="pb-2 pt-3"><b>Weight</b> </div>
						<input name="weight" type="text" id="weight" class="form-control" placeholder="Ex 60" value="{{old('weight')}}">
						@error('weight')
							<span class="text-danger text-sm" style="font-size:small">{{$message}}</span>
						@enderror
					</div>
					<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="field-label pb-2 pt-3"><b>Last Donation Date</b></div>
					</div>
					<div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<select name="Lday" id="Lday" class="form-control form-group-margin">
							<option value="">Day</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
						</select>
						@error('Lday')
							<span class="text-danger text-sm" style="font-size:small">{{$message}}</span>
						@enderror
				    </div>
					<div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
						<select name="Lmonth" id="Lmonth" class="form-control form-group-margin">
							<option value="">Month</option>
							<option value="Jan">Jan</option>
							<option value="Feb">Feb</option>
							<option value="Mar">Mar</option>
							<option value="Apr">Apr</option>
							<option value="May">May</option>
							<option value="Jun">Jun</option>
							<option value="Jul">Jul</option>
							<option value="Aug">Aug</option>
							<option value="Sep">Sep</option>
							<option value="Oct">Oct</option>
							<option value="Nov">Nov</option>
							<option value="Dec">Dec</option>
						</select>
						@error('Lmonth')
							<span class="text-danger text-sm" style="font-size:small">{{$message}}</span>
						@enderror
					</div>
					<div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<select name="Lyear" id="Lyear" class="form-control form-group-margin">
							<option value=""><span class="p-2">Year</span></option>
							<option value="2019">2019</option>
							<option value="2018">2018</option>
							<option value="2017">2017</option>
							<option value="2016">2016</option>
							<option value="2015">2015</option>
							<option value="2014">2014</option>
							<option value="2013">2013</option>
						</select>
						@error('Lyear')
							<span class="text-danger text-sm" style="font-size:small">{{$message}}</span>
						@enderror
					</div>
			</div>
			<h3 class="pt-4 pb-3">Contact Information</h3>
				<div class="row clearfix">
					<div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
						<div class="mb-2"><b>Region</b></div>
						<input class="form-control" name="state" type="text" id="state" placeholder="Region" value="{{ old('state')}}">
						@error('state')
							<span class="text-danger text-sm" style="font-size:small">{{$message}}</span>
						@enderror
					</div>
					<div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
						<div class="mb-2"><b>District</b></div>
						<input class="form-control" name="district" type="text" id="district" placeholder="District" value="{{ old('district')}}">
						@error('district')
							<span class="text-danger text-sm" style="font-size:small">{{$message}}</span>
						@enderror
					</div>
					<div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
						<div class="mb-2"><b>Village</b></div>
						<input class="form-control" name="village" type="text" id="village" placeholder="Village" value="{{ old('village')}}">
						@error('village')
							<span class="text-danger text-sm" style="font-size:small">{{$message}}</span>
						@enderror
					</div>
				</div>
			<div style="text-align:right">
				<button class="btn btn-success" >Submit</button>
			</div>
		</div>
		<div class="col-md-3"><br>	
		    <div class="headline headline-md posts">
                <h4 class="pb-2"> Recent Donor Join </h4>
       		</div>
				@foreach($donors as $donor)
					<div style="overflow:hidden; position: relative; height:110px">
						<ul  style="position: absolute; margin: 0px; padding: 0px; top: 0px;">
							<li class="row " style="margin: 0px; padding: 0px; height:110px ; width:240px; text-align:left;">
								<div class="col-sm-4 col-xs-4 col-md-4 col-4 col-lg-4 pt-2" style="font-size:15px; background-color:#b4bdba; text-align:center">
									<b class="dark py-1 px-2" style="font-size:20px; background-color:gray">{{$donor->bloodgroup}}</b><br>
									<small>{{$donor->created_at->toDateString()}}</small>
									
								</div>
								<div class="col-lg-8 col-md-8 col-8 col-xs-8 col-sm-8  ">
									<h4>
										<a href="/donor/{{$donor->id}}"><b> {{$donor->name}} </b></a>
									</h4>
									<p>
										{{$donor->state}} {{$donor->district}},<br>{{$donor->village}}
										<br>
									</p>
								</div>
							</li>
						</ul>
					</div>
					<hr>
					@endforeach
				{{$donors->links()}}
		</div>
	</div><br>			
</div> 
</form>
@endsection