<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.admin.events.index', [
            'events' => Event::all()
        ]);
    }
    public function show(Event $event)
    {
        //
    }
    public function destroy(Event $event)
    {
        //
    }
}