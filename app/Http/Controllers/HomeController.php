<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;

class HomeController extends Controller
{
    public function index() {
        $partners = Partner::get();
        return view('user.home', compact('partners'));
    }

    public function classlist() {
        return view('user.classlist');
    }
}
