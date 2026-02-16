<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Jobs\SendWelcomeEmail;

class UserController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt('12345678'),
        ]);

        // Dispatch Job
        SendWelcomeEmail::dispatch($user);

        return "User Created & Email Sent in Background!";
    }
}
