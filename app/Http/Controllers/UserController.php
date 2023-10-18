<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $title = 'Portfolio - Chia Wilsen';
        return view('landing_page', compact('title'));
    }
}
