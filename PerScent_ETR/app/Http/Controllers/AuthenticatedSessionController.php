<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function logout(Request $request)
    {
        Auth::logout();

        // Redirect to the specific page after logout
        return view('index');
    }
}
