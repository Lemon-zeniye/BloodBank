<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\User;
class EventController extends Controller
{
    public function index(User $user){
        $events = Event::orderBy('created_at','desc')->paginate(5);
        return view('event.index',compact('events','user'));
    }
    public function create(User $user){
       
        return view('event.create');
    }
    public function store(User $user){
        $data = request()->validate([
            'title' => 'required|max:30|min:5',
            'description' => 'required|min:30',
            'image' => 'required'
        ]);
        $imagepath = request('image')->store('DataEvent','public');
        
         auth()->user()->events()->create([
           'title' => $data['title'],
           'description' => $data['description'],
           'image' => $imagepath
       ]);

       return redirect('/events');
    }
    public function show(Event $events){
        return view('event.show',compact('events'));
    }
    public function destroy(User $user, Event $events){
      //  $this->authorize('delete', $events);
       $events->delete();
        return redirect('/events');
    }

}
