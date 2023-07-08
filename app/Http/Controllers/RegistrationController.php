<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('registration', [
            'events' => Event::latest()->get(),
        ]);
    }

    public function history()
    {
        return view('history', [
            // 'events' => Event::all(),
            'registrations' => Registration::latest()->paginate(5)
        ]);
    }
}