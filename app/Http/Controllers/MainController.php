<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
   public function admin() {
    return view('admin');
   }

   public function homeAction() {
       return view ('home');
   }
}
