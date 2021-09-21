<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    //
    public function show($username)
    {
        $userdata = User::findOrFail($username);
        return view('profile', compact('userdata'));
    }
}
