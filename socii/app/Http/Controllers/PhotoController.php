<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\View\View;

class PhotoController extends Controller
{
    public function show(Photo $photo): View {
        $photo->load([
            'gallery.user',
            'location',
            'metadata',
        ]);
        return view('photos.show', compact('photo'));
    }
}
