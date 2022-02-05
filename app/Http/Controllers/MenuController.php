<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function view (){
        return view('view');
    }
    public function dashboard (){
        return view('dashboard');
    }
    public function manajemen(){
        return view('manajemen');
    }
    public function farmasi(){
        return view('farmasi');
    }
    public function teknik_i(){
        return view('teknik_informatika');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
}
