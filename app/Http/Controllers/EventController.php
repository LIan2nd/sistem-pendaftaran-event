<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Registration;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function history()
    {
        return view('history', [
            'title' => 'History',
            // 'events' => Event::all(),
            'registrations' => Registration::latest()->paginate(5)
        ]);
    }

    public function events()
    {
        return view('events', [
            'title' => 'Events List',
            'events' => Event::latest()->paginate(3)
        ]);
    }
}