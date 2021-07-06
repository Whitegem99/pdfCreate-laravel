<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profile;
use App\diagnoses;

class BaseController extends Controller
{
    public function convertImage($img_str)
    {
        $image = base64_encode(file_get_contents(public_path('/img/'.$img_str)));
        return $image;
    }

}
