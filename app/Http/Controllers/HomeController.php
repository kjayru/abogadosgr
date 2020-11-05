<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){
       return view('home');
   }

   public function nosotros(){
       return view('nosotros');
   }

   public function areas(){
    return view('area');
    }

    public function abogados(){
        return view('abogados');
    }

    public function casos(){
        return view('casos');
    }

    public function blog(){
        return view('blog');
    }
    public function contacto(){
        return view('contacto');
    }
}
