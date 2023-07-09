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
        $event = $request->event_id;

        // return view('registration', [
        //     'eventName' => $event,
        //     'events' => Event::latest()->get(),
        //     'title' => "Registration"
        // ]);

        $validatedData = $request->validate([
            'event_id' => 'required'
        ]);

        $validatedData['user_id'] = Auth::user()->id;

        Registration::create($validatedData);
        return redirect('/events')->with('event', 'Terimakasih Sudah Daftar, catat tanggalnyaa dan sampai jumpa di Event');
    }
}