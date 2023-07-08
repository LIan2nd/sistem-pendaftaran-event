<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\Registration;
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
        return view('events', [
            'head' => $title,
            'events' => Event::latest()->filter(request(['search', 'category']))->paginate(5)->withQueryString(),
        ]);
    }
    public function show(Event $event)
    {
        return view('event', [
            'event' =>  $event]);
        
    }
}