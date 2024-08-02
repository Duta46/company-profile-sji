<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('user.home');
    }

    public function classlist() {
        return view('user.classlist');
    }
}
