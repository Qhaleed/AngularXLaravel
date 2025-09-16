<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Sign Up route

Route::post('/signup', function (Request $request){
    try {
        //  Validator function to check the content of the request
    // if it satisfies the validator's params
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6',
    ]);

    if ($validator->fails()){
        return response()->json(['errors' => $validator->errors()],
        422);
    }

    // Then if all is good
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    $token = $user->createToken('spa-token')->plainTextToken;

    return response()->json(['user' => $user, 'token' => $token], 201);
    } catch (\Throwable $th) {

    }

});
// Login Route


Route::post('/login', function (Request $request) {
    try {
        $validator = Validator::make($request->all(), [
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if($validator->fails()){
            return response()->json(['message' => 'missing/wrong values or combination!'],422);
        };

        if(!Auth::attempt($request->only(['email', 'password']))) {
            return response()-> json([
                'status'=>false,
                'message'=>'Email & Password does not match with our record.'
            ],401);
        }

            $user = User::where('email', $request->email)->first();

            return response()->json([
                'status' => true,
                'message' => 'User logged ion successfully',
                'token' => $user->createToken("API TOKEN")->plainTextToken
            ], 200);



    } catch (\Throwable $th) {
       return response()->json([
        'status'=>false,
        'message'=>$th->getMessage()
       ], 500);
    }
});

// Logout Route
