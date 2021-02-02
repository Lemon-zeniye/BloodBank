<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donor;
use App\User;
use App\Question;
class DonorController extends Controller
{
    public function practice(){
        return view('Blood.practice');
    }
    public function index(User $user){
        return view('Blood.index',compact('user'));
    }
    public function create(User $user){
       $donors = Donor::orderBy('created_at','desc')->paginate(5);
        return view('donor.create',compact('donors','user'));
    }
    public function store(User $user){
       $data = request()->validate([
           'name' => 'required|max:15',
           'email' => 'required|email|max:30',
           'bloodgroup' => 'required',
           'gender' => 'required',
           'birthdate' => 'required',
           'month' => 'required',
           'year' => 'required',
           'weight' => 'required',
           'state' => 'required|max:30',
           'district' => 'required|max:30',
           'village' => 'required',
           'mobile' => '',
           'password' => '|min:6',
           'Lday' => '',
           'Lmonth' => '',
           'Lyear' => ''
       ]);      
        auth()->user()->donor()->create($data);
       
       return redirect('/donor/create');
    } 
    public function show(Donor $donor, Question $question){
        return view('donor.show',compact('donor','question'));
    }
    public function destroy(User $user, Donor $donor){
        $this->authorize('delete', $donor);
        $donor->delete();
        return redirect('/donor/create');
    }
}
