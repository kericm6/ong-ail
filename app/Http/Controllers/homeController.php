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
    public function objectifs(){
        return view('pages.objectifs');
    }
    public function domaines(){
        return view('pages.domaines');
    }
    public function projets(){
        return view('pages.projets');
    }
    public function blog(){
        return view('pages.blog');
    }
}
