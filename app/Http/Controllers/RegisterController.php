<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        request()->validate([
            "name" => ["required"],
            "email" => ["required"],
            "password" => ["required"],
            "role" => ["required"]
        ]);

        $users = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password),
            "role" => $request->role
        ]);

        return response()->json([
            "message" => "Akun Berhasil Dibuat"
        ]);
    }
}
