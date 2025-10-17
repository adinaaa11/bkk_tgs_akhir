<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoTutorialController extends Controller
{
    public function index()
    {
        return view('video_tutorial');
    }
}
