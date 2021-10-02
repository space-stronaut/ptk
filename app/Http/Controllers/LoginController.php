<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if (Auth::attempt(["email" => $request->email, "password" => $request->password])) {
            return redirect('/dashboard');
        }else{
            return redirect()->back();
        }
    }

    public function show()
    {
        return view('login');
    }
}
