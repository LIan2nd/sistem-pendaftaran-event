<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        if ($event->image) {
            Storage::delete($event->image);
        }
        Event::destroy($event->id);
        return redirect('/dashboard/admin/events')->with('success', 'Event has been Slainn !!!!');
    }
}