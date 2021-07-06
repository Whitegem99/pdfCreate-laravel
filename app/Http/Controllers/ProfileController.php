<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profile;
use App\diagnoses;

class ProfileController extends BaseController
{
    public function index()
    {
        $profile = Profile::find(1);
        $diagnoses = Diagnoses::all();
        $image = $this-> convertImage($profile->profile_image);
        return view('profile', [
            "profile" => $profile,
            "image" => $image,
            "diagnoses" => $diagnoses
        ]);
    }

}
