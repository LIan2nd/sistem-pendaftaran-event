<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EventDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.events.index', [
            'events' => Event::where('user_id', Auth::user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.events.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255|min:3',
            'category_id' => 'required',
            'description' => 'required|min:5',
            'date' => 'required|date',
            'image' => 'image|file|max:5120'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('event-images');
        }

        $validatedData['slug'] = SlugService::createSlug(Event::class, 'slug', $request->name);
        $validatedData['user_id'] = Auth::user()->id;

        Event::create($validatedData);
        return redirect()->route('events.show', $validatedData['slug'])->with('create', 'Event created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('dashboard.events.show', [
            'title' => "Event Detail",
            'event' => $event,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('dashboard.events.edit', [
            'title' => "Edit Event",
            'event' => $event,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255|min:3',
            'category_id' => 'required',
            'image' => 'image|file|max:5120',
            'description' => 'required|min:5',
            'date' => 'required|date'
        ]);

        $validatedData['slug'] = SlugService::createSlug(Event::class, 'slug', $request->name);
        if (Event::where('slug', $validatedData['slug'])->where('id', '!=', $event->id)->exists()) {
            $uniqueSlug = $validatedData['slug'];
            $counter = 1;
            while (Event::where('slug', $uniqueSlug)->where('id', '!=', $event->id)->exists()) {
                $uniqueSlug = $validatedData['slug'] . '-' . $counter;
                $counter++;
            }
            $validatedData['slug'] = $uniqueSlug;
        }
        $validatedData['user_id'] = Auth::user()->id;

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('event-images');
        }

        $event->update($validatedData);

        return redirect()->route('events.show', $validatedData['slug'])->with('update', 'Event has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        if ($event->image) {
            Storage::delete($event->image);
        }
        Event::destroy($event->id);
        return redirect('/dashboard/events')->with('success', 'Event has been Slainn !!!!');
    }
}