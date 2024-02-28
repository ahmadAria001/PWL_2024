<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class WelcomeControl extends Controller
{
    function hello(): View
    {
        return view('hello');
    }
}
