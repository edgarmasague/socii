<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Photo;

class HomeController extends Controller
{
    public function index(): View {
        $photos = Photo::with([
            'gallery.user',
            'location',
            'metadata',
        ])
        ->latest()
        ->paginate(24);
        return view('welcome', compact('photos'));
    }
}
