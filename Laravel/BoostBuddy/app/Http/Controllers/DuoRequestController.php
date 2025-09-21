<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DuoRequest;
use Illuminate\Support\Facades\Auth;

class DuoRequestController extends Controller
{

    public function index() {
        $duoRequests = DuoRequest::all();
        return view('index', compact('duoRequests'));
    }

    public function create(){
        return view('duo_requests.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'game' => 'required|string|max:255',
            'server' => 'required|string|max:255',
            'discord_tag' => 'required|string|max:255',
        ]);

        DuoRequest::create([
            'user_id' => Auth::id(),
            'game' => $validated['game'],
            'server' => $validated['server'],
            'discord_tag' => $validated['discord_tag'],
            'status' => 'pending',
        ]);

       return redirect()->route('duo-requests.create')->with('success', 'Duo request created!');

    }



}
