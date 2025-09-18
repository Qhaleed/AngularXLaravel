<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class SignupController extends Controller
{


    public function __invoke(Request $request) : RedirectResponse{
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|email|unique:users',
            'password'=> 'required',
        ]);

        $data = $request->all();
        $user = $this->create($data);

        Auth::login($user);
        return redirect()->intended('/');
    }

    public function create(array $data) {
        return User::create([
            'name'=> $data['name'],
            'email'=> $data['email'],
            'password'=> $data['password']
        ]);
    }
}
