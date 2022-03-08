<?php

namespace App\Http\Controllers;
use App\Rules\MobileNo;
use Illuminate\Http\Request;
use App\Models\Photographer;

class PhotographerController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'bio' => ['required', 'string', 'min:20'],
            'mobile' => ['required', new MobileNo]
        ]);

        $photographer = Photographer::create([
            'name' => $request->name,
            'bio' => $request->bio,
            'mobile' => $request->mobile,
        ]);


    }
}
