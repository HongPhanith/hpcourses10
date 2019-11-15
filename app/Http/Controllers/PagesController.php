<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller

{

    public function index(){
    return view('pages.index');

    }

        public function services(){
            $services = "Welcome to hpp services passing data"; 
        return view('pages.services', compact('services'));
    
        }

    
        public function about(){
            $head = "welcome to hpn passing data"; 
        // return view('pages.about', compact('head'));
        return view('pages.about')->with('head', $head);
        }
    
}

