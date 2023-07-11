<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscribeController extends Controller
{

    // SEHARUSNYA SUBSCRIPTIONN MALAHH SUBSCRIBEE:')
    public function store(Request $request)
    {

        $existingEmail = Subscribe::where('email', $request->email)->first();

        if ($existingEmail) {
            return redirect('/thx');
        }

        $validatedData = $request->validate([
            'email' => 'email|required'
        ]);

        $validatedData['user_id'] = Auth::user()->id;

        $existingUser = Subscribe::where('user_id', $validatedData['user_id'])->exists();
        if ($existingUser) {
            return redirect('/thx');
        }

        Subscribe::create($validatedData);

        return redirect('/subs');

    }
}