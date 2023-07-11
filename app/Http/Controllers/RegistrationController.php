<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function history()
    {
        return view('history', [
            // 'events' => Event::all(),
            'registrations' => Registration::where('user_id', Auth::user()->id)->paginate(6),
        ]);
    }

    public function store(Request $request)
    {
        if (Auth::user()->hasRegistered($request->event_id)) {
            return redirect()->route('eventShow', $request->event_slug)->with('event', "You've Registered");
        }
        $validatedData = $request->validate([
            'event_id' => 'required'
        ]);

        $validatedData['user_id'] = Auth::user()->id;

        Registration::create($validatedData);
        return redirect()->route('eventShow', $request->event_slug)->with('event', 'Thank you for registering, note the date and see you at the Event');
    }
}