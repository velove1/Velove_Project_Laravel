<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeConrtoller extends Controller
{
    public function index(){
        return view('index');
    }
     public function login(){
        return view('login');
    }
    public function about(){
        return view('about');
    }
}
