<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function show(User $user): View {
        $galleries = $user->galleries()
            ->withCount('photos')
            ->with(['photos' => fn ($q) => $q->latest()->limit(1)])
            ->latest()
            ->paginate(12);
        return view('profile.show', compact('user', 'galleries'));
    }
}
