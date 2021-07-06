<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\profile;
use App\diagnoses;


// This is important to add here. 
  
class CustomerController extends BaseController
{
    public function printPDF()
    {
        $profile = Profile::find(1);
        $diagnoses = Diagnoses::all();
        $image = $this-> convertImage($profile->profile_image);

        $pdf = PDF::loadView('profile', [
            "profile" => $profile,
            "image" => $image,
            "diagnoses" => $diagnoses
        ]);  
        return $pdf->download('medium.pdf');
    }
}
