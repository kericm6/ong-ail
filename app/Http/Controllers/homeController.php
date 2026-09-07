<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function about(){
        return view('pages.about');
    }

    public function history(){
        return view('pages.histoire');
    }
    public function equipe(){
        return view('pages.equipe');
    }
}
