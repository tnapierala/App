<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Welcome;
use App\Models\Photo;

class WelcomeController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
}
