<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('registration', [
            'title' => 'Registrasi',
            'events' => Event::latest()->get(),
        ]);
    }
}