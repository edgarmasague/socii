<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Models\Location;
use App\Models\Photo;
use App\Models\PhotoMetadata;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SamplePhotoSeeder extends Seeder
{
    public function run(): void {
        $user = User::updateOrCreate(
            ['email' => 'socii@socii.test'],
            [
                'name'     => 'Socii',
                'username' => 'socii',
                'password' => Hash::make('password'),
            ]
        );
        
        $gallery = Gallery::updateOrCreate(
            ['slug' => 'nabao-river'],
            [
                'user_id'     => $user->id,
                'name'        => 'Nabão River',
                'description' => 'A collection of photographs taken along the Nabão River in Tomar, Portugal.',
            ]
        );

        $location = Location::create(
            [
                'country'      => 'Portugal',
                'country_code' => 'PT',
                'region'       => "Santarém",
                'city'         => 'Tomar',
            ]
        );

        $photo = Photo::create(
            [
                'gallery_id'  => $gallery->id,
                'location_id' => $location->id,
                'path'        => 'photos/river.jpg',
                'filename'    => 'river.jpg',
                'mime_type'   => 'image/jpeg',
                'size'        => 0,
                'width'       => 2400,
                'height'      => 1600,
                'taken_at'    => now(),
            ]
        );

        PhotoMetadata::create(
            [
                'photo_id'      => $photo->id,
                'camera_make'   => 'Canon',
                'camera_model'  => 'Eos 600D',
                'focal_length'  => '55mm',
                'aperture'      => 'f/6.3',
                'shutter_speed' => '1/100s',
                'iso'           => 100,
            ]
        );
        $this->command->info('Sample data created successfully.');
    }
}