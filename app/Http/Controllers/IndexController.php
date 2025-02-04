<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Owner;
use App\Models\Image;

class IndexController extends Controller
{
    public function index_list()
    {
        $owners = Owner::orderBy('id')
            ->limit(20)
            ->get();

        $animals = Animal::orderBy('id')
            ->limit(20)
            ->get();

        $images = Image::orderBy('id')
            ->limit(20)
            ->get();

        $animals_names = [];
        $animals_id = [];
        $animals_img = [];

        foreach ($animals as $animal) {
            $animals_names[] = $animal->name;
        }

        foreach ($animals as $animal) {
            $animals_id[] = $animal->id;
        }

        foreach ($images as $image) {
            $animals_img[] = $image->path;
        }

        return view(
            'index',
            [
                'owners' => $owners,
                'animals_name' => $animals_names,
                'animals_id' => $animals_id,
                'animals_img' => $animals_img
            ]
        );
    }
}
