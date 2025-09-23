<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DuoRequest;
use Illuminate\Support\Facades\Auth;

class DuoRequestController extends Controller
{

    public function index() {
        $duoRequests = DuoRequest::with('user')->orderBy('created_at', 'desc')->get();
        return view('index', compact('duoRequests'));
    }

    public function create(){
        $duoRequests = DuoRequest::with('user')->orderBy('created_at', 'desc')->get();
        return view('index', compact('duoRequests'));
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

    public function contact ($id){
        $duoRequest = DuoRequest::with('user')->findOrFail($id);
        return view('contact', compact('duoRequest'));
    }


}
