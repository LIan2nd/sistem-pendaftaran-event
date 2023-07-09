<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\Registration;
use App\Models\User;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {

        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' | ' . $category->name;
        }
        if (request('EO')) {
            $EO = User::firstWhere('username', request('EO'));
            $title = ' Orginazed by ' . $EO->name;
        }
        return view('events', [
            'head' => $title,
            'events' => Event::latest()->filter(request(['search', 'category', 'EO']))->paginate(5)->withQueryString(),
        ]);
    }
    public function show(Event $event)
    {
        return view('event', [
            'event' => $event,
            'title' => "Event Detail"
        ]);

    }
}